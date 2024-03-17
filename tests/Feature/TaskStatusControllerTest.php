<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\TaskStatus;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskStatusControllerTest extends TestCase
{
    use RefreshDatabase;

    private User $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }

    public function testIndex(): void
    {
        $response = $this->get(route('task_statuses.index'));
        $response->assertOk();
    }

    public function testCreate(): void
    {
        $response = $this->get(route('task_statuses.create'));
        $response->assertForbidden();

        $response = $this->actingAs($this->user)->get(route('task_statuses.create'));
        $response->assertOk();
    }

    public function testEdit(): void
    {
        $taskStatus = TaskStatus::factory()->create();

        $response = $this->get(route('task_statuses.edit', $taskStatus));
        $response->assertForbidden();

        $response = $this->actingAs($this->user)->get(route('task_statuses.edit', $taskStatus));
        $response->assertOk();
    }

    public function testStore(): void
    {
        $data = TaskStatus::factory()->make()->only('name');
        $response = $this->actingAs($this->user)->post(route('task_statuses.store', $data));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();

        $this->assertDatabaseHas('task_statuses', $data);
    }

    public function testUpdate(): void
    {
        $taskStatus = TaskStatus::factory()->create();
        $data = TaskStatus::factory()->make()->only('name');

        $response = $this->patch(route('task_statuses.update', $taskStatus), $data);
        $response->assertForbidden();
        $this->assertDatabaseMissing('task_statuses', $data);

        $response = $this->actingAs($this->user)->patch(route('task_statuses.update', $taskStatus), $data);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $this->assertDatabaseHas('task_statuses', $data);
    }

    public function testDelete(): void
    {
        $taskStatusToKeep = TaskStatus::factory()->create();
        $response = $this->delete(route('task_statuses.destroy', $taskStatusToKeep));
        $response->assertForbidden();
        $this->assertDatabaseHas('task_statuses', ['id' => (array) $taskStatusToKeep['id']]);

        $taskStatusToDelete = TaskStatus::factory()->create();
        $response = $this->actingAs($this->user)->delete(route('task_statuses.destroy', $taskStatusToDelete));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $this->assertDatabaseMissing('task_statuses', ['id' => (array) $taskStatusToDelete['id']]);
    }
}
