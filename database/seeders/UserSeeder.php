<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //added two user for admin_role and student_role
        $datas = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 1
            ],
            [
                'name' => 'Student1',
                'email' => 'studentOne@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 2
            ]
        ];

        foreach($datas as $data) {
            User::create($data);
        }
    }
}
