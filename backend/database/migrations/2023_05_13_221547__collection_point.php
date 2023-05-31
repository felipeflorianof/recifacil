<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CollectionPoint extends Migration
{

    public function up(): void
    {
        Schema::create('_collectionPoint', function (Blueprint $table){
            $table->uuid('uuid')->primary()->default(DB::raw('(UUID())'));
            $table->string('cnpj')->unique()->nullable(false);
            $table->date('foundation_date')->nullable(false);
            $table->boolean('type')->default(1);
            $table->timestamp('created_at')->useCurrent();

            $table->foreignUuid('user_uuid')->references('uuid')->on('users'); // Chave estrangeira para a tabela "people"
            $table->foreignUuid('contact_uuid')->nullable()->references('uuid')->on('_contact'); // Chave estrangeira para a tabela "contact"
            $table->foreignUuid('address_uuid')->references('uuid')->on('_address'); // Chave estrangeira para a tabela "address"
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_collectionPoint');
    }
};
