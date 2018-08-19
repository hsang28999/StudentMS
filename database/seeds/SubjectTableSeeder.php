<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects') -> insert([
           [
               'subjectName' => str_random(10),
               'passMark' => mt_rand (5*10, 7*10) / 10,
               'finalMark' => mt_rand (9*10, 10*10) / 10,
               'teachers_teacherId' => 1,
               'created_at' =>  \Illuminate\Support\Carbon::now(),
               'updated_at' =>  \Illuminate\Support\Carbon::now(),
           ],
            [
                'subjectName' => str_random(10),
                'passMark' => mt_rand (5*10, 7*10) / 10,
                'finalMark' => mt_rand (9*10, 10*10) / 10,
                'teachers_teacherId' => 2,
                'created_at' =>  \Illuminate\Support\Carbon::now(),
                'updated_at' =>  \Illuminate\Support\Carbon::now(),
            ],
            [
                'subjectName' => str_random(10),
                'passMark' => mt_rand (5*10, 7*10) / 10,
                'finalMark' => mt_rand (9*10, 10*10) / 10,
                'teachers_teacherId' => 3,
                'created_at' =>  \Illuminate\Support\Carbon::now(),
                'updated_at' =>  \Illuminate\Support\Carbon::now(),
            ],
            [
                'subjectName' => str_random(10),
                'passMark' => mt_rand (5*10, 7*10) / 10,
                'finalMark' => mt_rand (9*10, 10*10) / 10,
                'teachers_teacherId' => 4,
                'created_at' =>  \Illuminate\Support\Carbon::now(),
                'updated_at' =>  \Illuminate\Support\Carbon::now(),
            ],
            [
                'subjectName' => str_random(10),
                'passMark' => mt_rand (5*10, 7*10) / 10,
                'finalMark' => mt_rand (9*10, 10*10) / 10,
                'teachers_teacherId' => 5,
                'created_at' =>  \Illuminate\Support\Carbon::now(),
                'updated_at' =>  \Illuminate\Support\Carbon::now(),
            ],
        ]);
    }
}
