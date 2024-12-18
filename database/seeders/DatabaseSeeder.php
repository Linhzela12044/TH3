<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Tạo 10 tasks và 10 users
        Task::factory(10)->create();
        User::factory(10)->create();
        //Tạo 2 User chưa xác thực
        User::factory(2)->unverified()->create();

        $this->call([
            TaskSeeder::class,
        ]);
        
    }
}
