<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration
{
    public function up()
    {
        Schema::create(
            'types',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('alias', 10);
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('types');
    }
}
