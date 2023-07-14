<?php

namespace Database\Seeders;

use App\Models\Course\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
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
                    'name' => 'Coures 101',
                    'description' => 'this is course 101 for department1',
                    'status' => 'active',
                    'department_id' => 1
                ],
                [
                    'name' => 'Coures 102',
                    'description' => 'this is course 102 for department1',
                    'status' => 'active',
                    'department_id' => 1
                ],
                [
                    'name' => 'Coures 101',
                    'description' => 'this is course 101 for department2',
                    'status' => 'active',
                    'department_id' => 2
                ],
                [
                    'name' => 'Coures 101',
                    'description' => 'this is course 101 for department2',
                    'status' => 'active',
                    'department_id' => 2
                ]      
            ];
        foreach($datas as $data) {
            Course::create($data);
        }
    }
}
