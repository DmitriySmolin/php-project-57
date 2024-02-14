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
        $statuses = json_decode(file_get_contents(database_path('statuses.json')), true);
        TaskStatus::factory(count($statuses))
            ->sequence(...$statuses)
            ->create();
    }
}
