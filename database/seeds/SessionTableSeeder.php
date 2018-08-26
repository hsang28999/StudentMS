<?php

use Illuminate\Database\Seeder;

class SessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<20;$i++){
            \Illuminate\Support\Facades\DB::table('sessions') -> insert([
                [
                    'sessionOrder' => mt_rand(1,5),
                    'school_days_schoolDayId' => ($i+1),
                    'subjects_subjectId' => mt_rand(1,20),
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now()
                ]
            ]);
        }
    }
}
