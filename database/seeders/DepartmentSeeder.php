<?php

namespace Database\Seeders;

use App\Models\Department\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
                [
                    'name' => 'CS',
                    'description' => 'Computer Science',
                    'status' => 'active'
                ],
                [
                    'name' => 'CT',
                    'description' => 'Computer Science',
                    'status' => 'active'
                ]
            ];

        foreach($datas as $data) {
            Department::create($data);
        }
    }
}
