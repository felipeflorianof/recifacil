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
        Schema::create('signup_collection_points', function (Blueprint $table) {
            $table->id();
            $table->string('nomeCooperativa')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('senha')->nullable();
            $table->string('cnpj')->nullable();
            //$table->string('repetir_senha');
            $table->string('cep')->nullable();
            $table->string('rua')->nullable(); 
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('complemento')->nullable();
            $table->json('materiaisReciclaveis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signup_collection_points');
    }
};
