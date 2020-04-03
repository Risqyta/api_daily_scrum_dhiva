<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DailyScrum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_scrum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_users');
            $table->enum('team', array('DDS', 'BEON', 'DOT', 'Node1', 'Node2', 'React1','React2','Laravel','Laravel_Vue','Android'))->default('DDS');
            $table->text('activity_today');
            $table->text('activity_yesterday');
            $table->text('problem_yesterday');
            $table->text('solution');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_scrum');
    }
}
