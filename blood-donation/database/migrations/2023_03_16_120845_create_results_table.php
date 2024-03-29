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
        Schema::create('results', function (Blueprint $table) {
            //the result table has every test with the positive or negative result(passed) for each user
            $table->id();
            $table->timestamps();
            $table->foreignId('test_id')->constrained();
            $table->foreignId('donation_id')->constrained()->onDelete('cascade');
            $table->boolean('passed')->nullable();
            $table->float('result_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
