<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemesTable extends Migration
{
    public function up()
    {
        Schema::create(
            'memes',
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('src_id');
                $table->string('original_id');
                $table->integer('type_id');
                $table->integer('user_id');
                $table->string('name', 1000);
                $table->string('body', 1000);
                $table->string('description', 1000);
                $table->string('preview');
                $table->boolean('permanent');
                $table->timestamps();
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('memes');
    }
}
