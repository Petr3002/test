<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::insert([
            ['title' => 'TITLE1', 'text' => 'TEXT1'],
            ['title' => 'TITLE2', 'text' => 'TEXT2'],
            ['title' => 'TITLE3', 'text' => 'TEXT3'],
        ]);
    }
}
