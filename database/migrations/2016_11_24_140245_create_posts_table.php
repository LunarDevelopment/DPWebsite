<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_author')->unsigned();
            $table->foreign('post_author')
                ->references('id')->on('users');
            $table->text('post_title');
            $table->string('post_status', 20);
            $table->string('guid', 255)->unique();
            $table->text('content');
            $table->string('post_layout', 50)->nullable();
            $table->varchar('post_type', 20);
            $table->boolean('hide_title');
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
        Schema::dropIfExists('posts');
    }
}
