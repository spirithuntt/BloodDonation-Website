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
            $table->foreignId('donation_id')->constrained();
            $table->boolean('passed');
            //result number is the number of the result for the test if the test is a number test float
            $table->float('result_number')->nullable();
            //result_status enum is the status of the result if a number normal, high or low
            $table->enum('result_status', ['normal', 'high', 'low'])->nullable();
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
