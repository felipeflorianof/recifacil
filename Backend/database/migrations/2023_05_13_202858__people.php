<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class People extends Migration {
    
    public function up(): void {
        Schema::create('_people', function (Blueprint $table){
            $table->uuid('uuid')->primary()->default(DB::raw('(UUID())'));
            $table->string('name')->nullable(false);
            $table->timestamp('created_at')->nullable();
        });       
    }
 
    public function down(): void {
        Schema::dropIfExists('_people');
    }
}