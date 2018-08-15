<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_days', function (Blueprint $table) {
            $table->increments('schoolDayId');
            $table->dateTime('dayValue');
            $table->integer('classes_classId')->unsigned();
            $table->timestamps();
        });

        Schema::table('school_days', function($table) {
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
        Schema::dropIfExists('school_days');
    }
}
