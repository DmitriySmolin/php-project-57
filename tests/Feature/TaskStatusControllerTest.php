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

    public function testCreateForbiddenForGuest(): void
    {
        $response = $this->get(route('task_statuses.create'));
        $response->assertForbidden();
    }

    public function testCreateSuccessful(): void
    {
        $response = $this->actingAs($this->user)->get(route('task_statuses.create'));
        $response->assertOk();
    }

    public function testEditForbiddenForGuest(): void
    {
        $taskStatus = TaskStatus::factory()->create();
        $response = $this->get(route('task_statuses.edit', $taskStatus));
        $response->assertForbidden();
    }

    public function testEditSuccessful(): void
    {
        $taskStatus = TaskStatus::factory()->create();
        $response = $this->actingAs($this->user)->get(route('task_statuses.edit', $taskStatus));
        $response->assertOk();
    }

    public function testStoreForbiddenForGuest(): void
    {
        $data = TaskStatus::factory()->make()->only('name');
        $response = $this->post(route('task_statuses.store', $data));
        $response->assertForbidden();
        $this->assertDatabaseMissing('task_statuses', $data);
    }

    public function testStoreSuccessful(): void
    {
        $data = TaskStatus::factory()->make()->only('name');
        $response = $this->actingAs($this->user)->post(route('task_statuses.store', $data));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $this->assertDatabaseHas('task_statuses', $data);
    }

    public function testUpdateForbiddenForGuest(): void
    {
        $taskStatus = TaskStatus::factory()->create();
        $data = TaskStatus::factory()->make()->only('name');
        $response = $this->patch(route('task_statuses.update', $taskStatus), $data);
        $response->assertForbidden();
        $this->assertDatabaseMissing('task_statuses', $data);
    }

    public function testUpdateSuccessful(): void
    {
        $taskStatus = TaskStatus::factory()->create();
        $data = TaskStatus::factory()->make()->only('name');
        $response = $this->actingAs($this->user)->patch(route('task_statuses.update', $taskStatus), $data);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $this->assertDatabaseHas('task_statuses', $data);
    }

    public function testDeleteForbiddenForGuest(): void
    {
        $taskStatus = TaskStatus::factory()->create();
        $response = $this->delete(route('task_statuses.destroy', $taskStatus));
        $response->assertForbidden();
        $this->assertDatabaseHas('task_statuses', ['id' => $taskStatus->id]);
    }

    public function testDeleteFailsIfUsed(): void
    {
        $taskStatus = TaskStatus::factory()->hasTasks(1)->create();
        $response = $this->actingAs($this->user)->delete(route('task_statuses.destroy', $taskStatus));
        $response->assertRedirect();
        $this->assertDatabaseHas('task_statuses', ['id' => $taskStatus->id]);
    }

    public function testDeleteSuccessful(): void
    {
        $taskStatus = TaskStatus::factory()->create();
        $response = $this->actingAs($this->user)->delete(route('task_statuses.destroy', $taskStatus));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $this->assertDatabaseMissing('task_statuses', ['id' => $taskStatus->id]);
    }
}
