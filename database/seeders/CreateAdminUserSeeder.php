<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $user = User::create([
            'name' => 'admin', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user->assignRole('admin');
    }
}
