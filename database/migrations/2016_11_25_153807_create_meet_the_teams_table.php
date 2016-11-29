<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetTheTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meet_the_team', function (Blueprint $table) {
            $table->increments('id');
            $table->string('forename', 20);
            $table->string('surname', 20);
            $table->string('role', 100);
            $table->string('image_url', 255);
            $table->string('rollover_url', 255);
            $table->string('linkedin_url', 255);
            $table->string('department', 25);
            $table->text('description');
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
        Schema::dropIfExists('meet_the_team');
    }
}
