<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_credentials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('base_url');
            $table->string('username');
            $table->string('api_path');
            $table->string('api_key');
            $table->string('password');
            $table->string('others');
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
        Schema::drop('client_credentials');
    }
}

