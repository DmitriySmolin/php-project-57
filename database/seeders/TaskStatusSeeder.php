<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;


class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = Yaml::parseFile(database_path('statuses.yaml'));
        TaskStatus::factory(count($statuses))
            ->sequence(...$statuses)
            ->create();
    }
}
