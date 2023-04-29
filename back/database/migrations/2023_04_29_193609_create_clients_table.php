<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('cpf');
            $table->string('name');
            $table->char('password');
            $table->string('email');
            $table->string('phone');
            $table->string('foundation');
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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
