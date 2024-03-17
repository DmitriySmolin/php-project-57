<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Task;
use App\Models\TaskStatus;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskControllerTest extends TestCase
{
    use RefreshDatabase;

    private User $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        TaskStatus::factory(5)->create();
    }

    public function testIndex(): void
    {
        $response = $this->get(route('tasks.index'));
        $response->assertOk();
    }

    public function testCreateForbiddenForGuest(): void
    {
        $response = $this->get(route('tasks.create'));
        $response->assertForbidden();
    }

    public function testCreateSuccessful(): void
    {
        $response = $this->actingAs($this->user)->get(route('tasks.create'));
        $response->assertOk();
    }

    public function testShowSuccessful(): void
    {
        $task = Task::factory()->create();
        $response = $this->get(route('tasks.show', $task));
        $response->assertOk();
        $response->assertSee($task->name);
    }

    public function testEditForbiddenForGuest(): void
    {
        $task = Task::factory()->create();
        $response = $this->get(route('tasks.edit', $task));
        $response->assertForbidden();
    }

    public function testEditSuccessful(): void
    {
        $task = Task::factory()->create();
        $response = $this->actingAs($this->user)->get(route('tasks.edit', $task));
        $response->assertOk();
        $response->assertSee($task->name);
    }

    public function testStoreForbiddenForGuest(): void
    {
        $data = Task::factory()->make()->only('name', 'status_id');
        $response = $this->post(route('tasks.store', $data));
        $response->assertForbidden();
        $this->assertDatabaseMissing('tasks', $data);
    }

    public function testStoreSuccessful(): void
    {
        $data = Task::factory()->make()->only('name', 'status_id');
        $response = $this->actingAs($this->user)->post(route('tasks.store', $data));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $this->assertDatabaseHas('tasks', $data);
    }

    public function testUpdateForbiddenForGuest(): void
    {
        $task = Task::factory()->create();
        $data = Task::factory()->make()->only('name', 'status_id');
        $response = $this->patch(route('tasks.update', $task), $data);
        $response->assertForbidden();
        $this->assertDatabaseMissing('tasks', $data);
    }

    public function testUpdateSuccessful(): void
    {
        $task = Task::factory()->create();
        $data = Task::factory()->make()->only('name', 'status_id');
        $response = $this->actingAs($this->user)->patch(route('tasks.update', $task), $data);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $this->assertDatabaseHas('tasks', $data);
    }

    public function testDeleteForbiddenForGuest(): void
    {
        $task = Task::factory()->create();
        $response = $this->delete(route('tasks.destroy', $task));
        $response->assertForbidden();
        $this->assertDatabaseHas('tasks', ['id' => $task->id]);
    }

    public function testDeleteFailsIfNotCreator(): void
    {
        $task = Task::factory()->create();
        $anotherUser = User::factory()->create();
        $response = $this->actingAs($anotherUser)->delete(route('tasks.destroy', $task));
        $response->assertForbidden();
        $this->assertDatabaseHas('tasks', ['id' => $task->id]);
    }

    public function testDeleteSuccessful(): void
    {
        $task = Task::factory()->for($this->user, 'createdBy')->create();
        $response = $this->actingAs($this->user)->delete(route('tasks.destroy', $task));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
    }
}
