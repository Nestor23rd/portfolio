<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use RuntimeException;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $email = env('ADMIN_EMAIL');
        $password = env('ADMIN_PASSWORD');

        if (! $email || ! $password) {
            throw new RuntimeException('ADMIN_EMAIL and ADMIN_PASSWORD must be configured.');
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Nestor KPADJA',
                'password' => $password,
                'is_admin' => true,
            ],
        );
    }
}
