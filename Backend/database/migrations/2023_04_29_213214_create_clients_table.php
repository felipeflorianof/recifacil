<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cpf')->unique();
            $table->date('birthdate');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('CEP');
            $table->string('City');
            $table->string('State');
            $table->string('Neighborhood');
            $table->string('street');
            $table->string('Number');
            $table->string('Complement');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}

