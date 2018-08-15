<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_attendances', function (Blueprint $table) {
            $table->increments('teacherAttendanceId');
            $table->smallInteger('teacherAttendanceValue');
            $table->integer('sessions_sessionId')->unsigned();
            $table->integer('teachers_teacherId')->unsigned();
            $table->timestamps();
        });

        Schema::table('teacher_attendances', function($table) {
            $table->foreign('teachers_teacherId')->references('teacherId')->on('teachers');
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
        Schema::dropIfExists('teacher_attendances');
    }
}
