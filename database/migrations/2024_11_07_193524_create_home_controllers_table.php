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
        Schema::create('home_controllers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('verseoftheday', function (Blueprint $table) {
            $table->id();
            $table->string('verse')->nullable();
            $table->string('words')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
        });
        Schema::create('psalmoftheday', function (Blueprint $table) {
            $table->id();
            $table->string('verse')->nullable();
            $table->string('words')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
        });

        Schema::create('proverboftheday', function (Blueprint $table) {
            $table->id();
            $table->string('verse')->nullable();
            $table->string('words')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_controllers');
    }
};
