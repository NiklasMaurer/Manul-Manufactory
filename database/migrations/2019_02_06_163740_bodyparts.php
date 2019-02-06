<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bodyparts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('bodyparts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamp('created_at');
            $table->timestamp('created_by');
            $table->timestamp('updated_at');
            $table->timestamp('updated_by');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
