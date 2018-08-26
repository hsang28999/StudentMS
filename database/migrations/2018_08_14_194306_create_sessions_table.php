<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('sessionId');
            $table->smallInteger('sessionOrder');
            $table->integer('school_days_schoolDayId')->unsigned();
            $table->integer('subjects_subjectId')->unsigned();
            $table->timestamps();
        });

        Schema::table('sessions', function($table) {
            $table->foreign('school_days_schoolDayId')->references('schoolDayId')->on('school_days');
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
        Schema::dropIfExists('sessions');
    }
}
