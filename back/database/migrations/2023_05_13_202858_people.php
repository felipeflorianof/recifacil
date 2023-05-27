<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class People extends Migration {
    
    public function up(): void {
        Schema::create('_people', function (Blueprint $table){
            $table->uuid('uuid')->primary()->default(DB::raw('(UUID())'));
            $table->string('name');
            $table->timestamp('dt_created');
        });

        Schema::create('_contact', function (Blueprint $table){
            $table->uuid('uuid')->primary()->default(DB::raw('(UUID())'));
            $table->string('email')->nullable(false);
            $table->string('phone');
        });

        Schema::create('_address', function (Blueprint $table){
            $table->uuid('uuid')->primary()->default(DB::raw('(UUID())'));
            $table->string('number')->nullable(false);
            $table->string('street')->nullable(false);
            $table->string('neighborhood')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('state')->nullable(false);
            $table->string('country')->nullable(false);
            $table->string('zip')->nullable(false);
            $table->string('complement')->nullable();
        });

        Schema::create('_donator', function (Blueprint $table){
            $table->uuid('uuid')->primary()->default(DB::raw('(UUID())'));
            $table->string('cpf')->unique();
            $table->date('date_birth');
            $table->timestamp('dt_created')->useCurrent();
            $table->boolean('type')->default(0);
            
            $table->foreignUuid('person_uuid')->references('uuid')->on('_people'); // Chave estrangeira para a tabela "people"
            $table->foreignUuid('contact_uuid')->nullable()->references('uuid')->on('_contact'); // Chave estrangeira para a tabela "contact"
            $table->foreignUuid('address_uuid')->references('uuid')->on('_address'); // Chave estrangeira para a tabela "address"
        });

        Schema::create('_CollectionPoint', function (Blueprint $table){
            $table->uuid('uuid')->primary()->default(DB::raw('(UUID())'));
            $table->string('cnpj')->unique()->nullable(false);
            $table->date('date_foundation')->nullable(false);
            $table->timestamp('dt_created')->useCurrent();
            $table->boolean('type')->default(1);

            $table->foreignUuid('person_uuid')->references('uuid')->on('_people'); // Chave estrangeira para a tabela "people"
            $table->foreignUuid('contact_uuid')->nullable()->references('uuid')->on('_contact'); // Chave estrangeira para a tabela "contact"
            $table->foreignUuid('address_uuid')->references('uuid')->on('_address'); // Chave estrangeira para a tabela "address"
        });
    }
 
    public function down(): void {
        Schema::dropIfExists('people');
         
    }
}