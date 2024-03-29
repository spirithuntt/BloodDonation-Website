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
            //if the user is deleted the donation is deleted
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('center_id')->constrained()->onDelete('cascade');
            $table->foreignId('blood_type_id')->constrained();
            $table->foreignId('donation_type_id')->constrained();
            $table->boolean('is_donated')->default(false);
            $table->date('date')->nullable();
            $table->time('time')->nullable();
        

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
