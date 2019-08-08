<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSrcsTable extends Migration
{
    public function up()
    {
        Schema::create(
            'srcs',
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned()->index();
                $table->string('alias');
                $table->string('name');
                $table->string('url');
                $table->unsignedSmallInteger('request_items_quantity');
                $table->unsignedSmallInteger('filter_min_votes');
                $table->string('favicon');
                $table->timestamps();
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('srcs');
    }
}
