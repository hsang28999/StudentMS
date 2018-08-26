<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->increments('markId');
            $table->decimal('markValue',5,2);
            $table->integer('students_studentId')->unsigned();
            $table->integer('subjects_subjectId')->unsigned();
            $table->timestamps();
        });

        Schema::table('marks', function($table) {
            $table->foreign('students_studentId')->references('studentId')->on('students');
            $table->foreign('subjects_subjectId')->references('subjectId')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
