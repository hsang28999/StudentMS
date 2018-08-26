<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_attendances', function (Blueprint $table) {
            $table->increments('studentAttendanceId');
            $table->smallInteger('studentAttendanceValue');
            $table->integer('students_studentId')->unsigned();
            $table->integer('sessions_sessionId')->unsigned();
            $table->timestamps();
        });

        Schema::table('student_attendances', function($table) {
            $table->foreign('students_studentId')->references('studentId')->on('students');
            $table->foreign('sessions_sessionId')->references('sessionId')->on('sessions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_attendances');
    }
}
