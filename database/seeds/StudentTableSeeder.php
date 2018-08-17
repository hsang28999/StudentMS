<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'studentCode' => 'A001',
                'email' => str_random(10).'@gmail.com',
                'address' => str_random(10),
                'gender' => 1,
                'dateOfBirth' => '1995-02-13',
                'phoneNumber' => '01297272721',
                'studentName' => str_random(10),
                'classes_classId' => 1
            ],
            [
                'studentCode' => 'A002',
                'email' => str_random(10).'@gmail.com',
                'address' => str_random(10),
                'gender' => 1,
                'dateOfBirth' => '1995-02-14',
                'phoneNumber' => '01297212721',
                'studentName' => str_random(10),
                'classes_classId' => 2
            ],
            [
                'studentCode' => 'A003',
                'email' => str_random(10).'@gmail.com',
                'address' => str_random(10),
                'gender' => 1,
                'dateOfBirth' => '1995-02-13',
                'phoneNumber' => '01297271221',
                'studentName' => str_random(10),
                'classes_classId' => 3
            ],
            [
                'studentCode' => 'A004',
                'email' => str_random(10).'@gmail.com',
                'address' => str_random(10),
                'gender' => 1,
                'dateOfBirth' => '1995-02-13',
                'phoneNumber' => '03297272721',
                'studentName' => str_random(10),
                'classes_classId' => 4
            ],
            [
                'studentCode' => 'A005',
                'email' => str_random(10).'@gmail.com',
                'address' => str_random(10),
                'gender' => 0,
                'dateOfBirth' => '1995-02-13',
                'phoneNumber' => '01297271121',
                'studentName' => str_random(10),
                'classes_classId' => 5
            ],
            [
                'studentCode' => 'A006',
                'email' => str_random(10).'@gmail.com',
                'address' => str_random(10),
                'gender' => 1,
                'dateOfBirth' => '1995-02-13',
                'phoneNumber' => '01297279921',
                'studentName' => str_random(10),
                'classes_classId' => 6
            ],

        ]);
    }
}
