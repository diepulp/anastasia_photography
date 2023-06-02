<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use \App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Order::factory(5)->create();

        $user = User::factory()->create([
            'name' => "Vladimir Ivanov",
            'email' => 'mail@gmail.com'
        ]);
        Order::factory(10)->create([
            'user_id' => $user->id
        ]);
    }
}
