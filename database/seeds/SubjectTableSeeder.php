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
        $SJ = ['Math','English','Literature','History','Laravel','PHP','Chinese','.Net'];
        for ($i=0;$i<20;$i++){
            DB::table('subjects') -> insert([
                [
                    'subjectName' => $SJ[mt_rand(0,count($SJ)-1)],
                    'passMark' => mt_rand (5*10, 7*10) / 10,
                    'finalMark' => mt_rand (9*10, 10*10) / 10,
                    'teachers_teacherId' => ($i+1),
                    'created_at' =>  \Illuminate\Support\Carbon::now(),
                    'updated_at' =>  \Illuminate\Support\Carbon::now(),
                ],
            ]);
        }

    }
}
