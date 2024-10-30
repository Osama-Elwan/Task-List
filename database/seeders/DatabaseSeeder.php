<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //open task model please and read note there
        Task::factory(25)->create(); //if u need to refresh db ,remove all old values and seed use the command (php artisan migrate:refresh --seed)
        User::factory(5)->create();
        User::factory(2)->unverified()->create(); //take look at userfactory mehtod (unverified) to make users unverified

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
