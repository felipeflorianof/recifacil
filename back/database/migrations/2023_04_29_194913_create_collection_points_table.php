<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {

 Schema::create('collection_points', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->default(DB::raw('(UUID())'));
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('CPNJ');
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
    
    public function down(): void
    {
        Schema::dropIfExists('collection_points');
    }
};