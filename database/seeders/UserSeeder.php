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
        //
        $userData = [
            [
                'name' => 'Bro Operator',
                'email' => 'oprator@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'operator',
            ],
            [
                'name' => 'Bro Keuangan',
                'email' => 'keuangan@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'keuangan',
            ],
            [
                'name' => 'Bro Marketing',
                'email' => 'marketing@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'marketing',
            ]

        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }

        User::create([
            'name' => 'Septianz',
            'email' => 'sep@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'guest',
        ]);
    }
}