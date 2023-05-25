<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // added admin_role and student_role as default
        $datas = [
            [
                'name' => 'Admin',
                'code' => 'admin',
                'description' => 'for admin role'
            ],
            [
                'name' => 'Student',
                'code' => 'student',
                'description' => 'for student role'
            ]
        ];

        foreach($datas as $data) {
            Role::create($data);
        }
    }
}
