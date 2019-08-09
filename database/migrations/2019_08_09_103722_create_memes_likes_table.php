<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemesLikesTable extends Migration
{
    public function up()
    {
        Schema::create(
            'memes_likes',
            function (Blueprint $table) {
                $table->integer('meme_id');
                $table->integer('user_id');
                $table->dateTime('created_at');
                $table->index(['meme_id', 'user_id']);
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('memes_likes');
    }
}
