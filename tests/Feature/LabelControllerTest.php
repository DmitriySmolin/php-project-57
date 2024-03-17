<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Label;
use App\Models\TaskStatus;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LabelControllerTest extends TestCase
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
        $response = $this->get(route('labels.index'));
        $response->assertOk();
    }

    public function testCreateForbiddenForGuest(): void
    {
        $response = $this->get(route('labels.create'));
        $response->assertForbidden();
    }

    public function testCreateSuccessful(): void
    {
        $response = $this->actingAs($this->user)->get(route('labels.create'));
        $response->assertOk();
    }

    public function testEditForbiddenForGuest(): void
    {
        $label = Label::factory()->create();
        $response = $this->get(route('labels.edit', $label));
        $response->assertForbidden();
    }

    public function testEditSuccessful(): void
    {
        $label = Label::factory()->create();
        $response = $this->actingAs($this->user)->get(route('labels.edit', $label));
        $response->assertOk();
    }

    public function testStoreForbiddenForGuest(): void
    {
        $data = Label::factory()->make()->only('name');
        $response = $this->post(route('labels.store', $data));
        $response->assertForbidden();
        $this->assertDatabaseMissing('labels', $data);
    }

    public function testStoreSuccessful(): void
    {
        $data = Label::factory()->make()->only('name');
        $response = $this->actingAs($this->user)->post(route('labels.store', $data));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $this->assertDatabaseHas('labels', $data);
    }

    public function testUpdateForbiddenForGuest(): void
    {
        $label = Label::factory()->create();
        $data = Label::factory()->make()->only('name');
        $response = $this->patch(route('labels.update', $label), $data);
        $response->assertForbidden();
        $this->assertDatabaseMissing('labels', $data);
    }

    public function testUpdateSuccessful(): void
    {
        $label = Label::factory()->create();
        $data = Label::factory()->make()->only('name');
        $response = $this->actingAs($this->user)->patch(route('labels.update', $label), $data);
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $this->assertDatabaseHas('labels', $data);
    }

    public function testDeleteForbiddenForGuest(): void
    {
        $label = Label::factory()->create();
        $response = $this->delete(route('labels.destroy', $label));
        $response->assertForbidden();
        $this->assertDatabaseHas('labels', ['id' => $label->id]);
    }

    public function testDeleteFailsIfUsed(): void
    {
        TaskStatus::factory()->create();
        $label = Label::factory()->hasTasks(1)->create();
        $response = $this->actingAs($this->user)->delete(route('labels.destroy', $label));
        $response->assertRedirect();
        $this->assertDatabaseHas('labels', ['id' => $label->id]);
    }

    public function testDeleteSuccessful(): void
    {
        $label = Label::factory()->create();
        $response = $this->actingAs($this->user)->delete(route('labels.destroy', $label));
        $response->assertSessionHasNoErrors();
        $response->assertRedirect();
        $this->assertDatabaseMissing('labels', ['id' => $label->id]);
    }
}
