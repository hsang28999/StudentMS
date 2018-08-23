<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0;$i <15;$i++){
            DB::table('classes')->insert([
                [
                    'className' => 'C00'.($i+1),
                    'teachers_teacherId' => mt_rand(1,20)
                ]

            ]);
        }

    }
}
