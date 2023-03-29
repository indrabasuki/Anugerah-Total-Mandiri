<?php

namespace Database\Seeders;

use App\Models\User;
 use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'superadmin',
            'name' => 'Superadmin',
            'phone' => '1234567890',
            'email' => 'superadmin@localhost.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ])->assignRole('superadmin');

    }
}
