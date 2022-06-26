<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        Task::factory(100)->create();
    }
}
