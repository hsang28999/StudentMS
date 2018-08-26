<?php

use Illuminate\Database\Seeder;



class SchoolDayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0;$i <30;$i++){
            \Illuminate\Support\Facades\DB::table('school_days') -> insert([
                [
                    'dayValue' => '2018-08-'.($i+1),
                    'classes_classId' => mt_rand (1,15),
                    'created_at' => \Illuminate\Support\Carbon::now(),
                    'updated_at' => \Illuminate\Support\Carbon::now()
                ]
            ]);
        }

    }
}
