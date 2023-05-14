<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Request extends Migration
{
    public function up(): void
    {
        Schema::create('_request', function(Blueprint $table){
            $table->uuid('uuid')->primary()->default(DB::raw('(UUID())'));
            $table->datetime('request_date')->nullable(false);
            $table->string('status')->default('requested');
            $table->foreignUuid('donator_uuid')->references('uuid')->on('_donator')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_request');
    }
};
