<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
           [
               'className' => 'C001',
               'teachers_teacherId' => 1
           ],
            [
                'className' => 'C002',
                'teachers_teacherId' => 2
            ],
            [
                'className' => 'C003',
                'teachers_teacherId' => 3
            ],
            [
                'className' => 'C004',
                'teachers_teacherId' => 4
            ],
            [
                'className' => 'C005',
                'teachers_teacherId' => 5
            ],
            [
                'className' => 'C006',
                'teachers_teacherId' => 6
            ]
        ]);
    }
}
