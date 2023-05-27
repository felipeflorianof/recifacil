<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Requests extends Migration
{
    public function up(): void
    {
        Schema::create('_requests', function (Blueprint $table) {
            $table->uuid('uuid')->primary()->default(DB::raw('(UUID())'));
            $table->dateTime('request_date')->nullable(false);
            $table->string('status')->default('requested');
            $table->uuid('donator_uuid');
            $table->foreign('donator_uuid')->references('uuid')->on('_donator')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_requests');
    }
}
