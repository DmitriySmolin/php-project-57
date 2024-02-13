<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskStatus::factory()
            ->count(4)
            ->sequence(
                ['name' => 'новый'],
                ['name' => 'в работе'],
                ['name' => 'на тестировании'],
                ['name' => 'завершен'],
            )
            ->create();
    }
}
