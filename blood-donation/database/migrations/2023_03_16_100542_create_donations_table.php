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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('blood_type_id')->constrained();
            $table->foreignId('donation_type_id')->constrained();
            $table->foreignId('appointment_id')->constrained();
            $table->boolean('is_donated')->default(false);

        });
    }

    /**
     * Reverse the migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};