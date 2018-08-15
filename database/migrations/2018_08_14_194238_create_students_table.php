<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('studentId');
            $table->string('studentCode');
            $table->string('email');
            $table->string('address');
            $table->smallInteger('gender');
            $table->dateTime('dateOfBirth');
            $table->string('phoneNumber');
            $table->string('studentName');
            $table->integer('classes_classId')->unsigned();
            $table->timestamps();
        });

        Schema::table('students', function($table) {
            $table->foreign('classes_classId')->references('classId')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
