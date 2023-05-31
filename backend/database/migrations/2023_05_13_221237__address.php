<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Address extends Migration
{
    public function up(): void
    {
        Schema::create('_address', function (Blueprint $table){
            $table->uuid('uuid')->primary()->default(DB::raw('(UUID())'));
            $table->string('number')->nullable(false);
            $table->string('street')->nullable(false);
            $table->string('neighborhood')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('state')->nullable(false);
            $table->string('country')->nullable(false);
            $table->string('zip')->nullable(false);
            $table->string('complement');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_address');
    }
};
