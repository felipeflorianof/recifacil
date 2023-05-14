<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Donator extends Migration
{
    public function up(): void
    {
        Schema::create('_donator', function (Blueprint $table){
            $table->uuid('uuid')->primary()->default(DB::raw('(UUID())'));
            $table->string('cpf')->unique()->nullable(false);
            $table->date('date_birth')->nullable(false);
            $table->timestamp('dt_created')->useCurrent();
            $table->boolean('type')->default(0);
            
            $table->foreignUuid('person_uuid')->references('uuid')->on('_people'); // Chave estrangeira para a tabela "people"
            $table->foreignUuid('contact_uuid')->nullable()->references('uuid')->on('_contact'); // Chave estrangeira para a tabela "contact"
            $table->foreignUuid('address_uuid')->references('uuid')->on('_address'); // Chave estrangeira para a tabela "address"
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_donator');
    }
};
