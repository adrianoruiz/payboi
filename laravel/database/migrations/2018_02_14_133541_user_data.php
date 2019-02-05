<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       

        Schema::create('user_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_activity');
            $table->string('cell_phone');
            $table->string('site');
            $table->string('cnpj_cpf');
            $table->string('type_person');
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
        Schema::drop('user_data');
    }
}
