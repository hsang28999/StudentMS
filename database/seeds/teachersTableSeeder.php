<?php

use Illuminate\Database\Seeder;

class teachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('teachers') -> truncate();
        DB::table('teachers')->insert([
            [

                'teacherName' => str_random(10),
                'joiningDate' =>'2017-02-13',
                'email' => str_random(10).'@gmail.com',
                'address' => str_random(10),
                'gender' => 1,
                'dateOfBirth' => '1995-02-13',
                'phone' => '01297272721'
            ],
            [

                'teacherName' => str_random(10),
                'joiningDate' =>'2017-03-13',
                'email' => str_random(10).'@gmail.com',
                'address' => str_random(10),
                'gender' => 1,
                'dateOfBirth' => '1994-02-13',
                'phone' => '01217272721'
            ],
            [

                'teacherName' => str_random(10),
                'joiningDate' =>'2018-02-13',
                'email' => str_random(10).'@gmail.com',
                'address' => str_random(10),
                'gender' => 0,
                'dateOfBirth' => '1995-02-19',
                'phone' => '01297272792'
            ],
            [

                'teacherName' => str_random(10),
                'joiningDate' =>'2018-01-13',
                'email' => str_random(10).'@gmail.com',
                'address' => str_random(10),
                'gender' => 1,
                'dateOfBirth' => '1995-03-18',
                'phone' => '01297220721'
            ],
            [

                'teacherName' => str_random(10),
                'joiningDate' =>'2018-10-19',
                'email' => str_random(10).'@gmail.com',
                'address' => str_random(10),
                'gender' => 1,
                'dateOfBirth' => '1993-02-22',
                'phone' => '01297272797'
            ],
            [

                'teacherName' => str_random(10),
                'joiningDate' =>'2017-10-19',
                'email' => str_random(10).'@gmail.com',
                'address' => str_random(10),
                'gender' => 0,
                'dateOfBirth' => '1995-02-19',
                'phone' => '0917262718'
            ]

        ]);
    }
}
