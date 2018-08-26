<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('subjectId');
            $table->string('subjectName');
            $table->decimal('passMark',5,2);
            $table->decimal('finalMark',5,2);
            $table->integer('teachers_teacherId')->unsigned();
            $table->timestamps();
        });

        Schema::table('subjects', function($table) {
            $table->foreign('teachers_teacherId')->references('teacherId')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
