<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = json_decode(file_get_contents(database_path('tasks.json')), true);
        Task::factory(count($tasks))
            ->sequence(...$tasks)
            ->create();
    }
}
