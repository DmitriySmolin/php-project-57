<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = json_decode(file_get_contents(database_path('labels.json')), true);
        Label::factory(count($tasks))
            ->sequence(...$tasks)
            ->create();
    }
}
