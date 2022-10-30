<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datathing extends Migration
{
    /**
     * Run the migrations
     *    * @return void
     */
    public function up()
    {
        Schema::create('fiels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filenames');
            
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
        Schema::dropIfExists('fiels');
    }
}
