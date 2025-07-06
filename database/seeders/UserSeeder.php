<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::updateOrCreate(
            ['email' => env('DEFAULT_ADMIN_EMAIL')],
            [
                'name' => env('DEFAULT_ADMIN_NAME'),
                'email' => env('DEFAULT_ADMIN_EMAIL'),
                'password' => Hash::make(env('DEFAULT_ADMIN_PASSWORD')),
                'email_verified_at' => now(),
            ]
        );

        if ($admin) {
            $admin->assignRole('admin');
        }
    }
}
