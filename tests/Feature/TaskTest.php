<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_task_creation()
    {
        $admin = User::factory()->create(['is_admin' => true]);
        $user = User::factory()->create(['is_admin' => false]);

        $response = $this->post('/tasks', [
            'title' => 'Test Task',
            'description' => 'Test Description',
            'assigned_to_id' => $user->id,
            'assigned_by_id' => $admin->id,
        ]);

        $response->assertRedirect('/tasks');
        $this->assertDatabaseHas('tasks', [
            'title' => 'Test Task',
            'description' => 'Test Description',
            'assigned_to_id' => $user->id,
            'assigned_by_id' => $admin->id,
        ]);
    }
}
