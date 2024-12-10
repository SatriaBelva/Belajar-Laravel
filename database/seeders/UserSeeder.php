<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'     => 'Satria Belva Nararya',
            'username' => 'satriabelva',
            'email'    => 'satriabelvanararya@gmail.com'
        ]);

        User::factory(9)->create();
    }
}
