<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionPointsTable extends Migration
{
    public function up()
    {
        Schema::create('collection_points', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->default(DB::raw('(UUID())'));
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('CNPJ');
            $table->string('Email');
            $table->date('DateFoundation');
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
        Schema::dropIfExists('collection_points');
    }
}
