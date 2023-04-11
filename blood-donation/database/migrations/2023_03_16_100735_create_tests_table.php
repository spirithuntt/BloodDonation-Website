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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //this test table is static and the admin will add the tests and the criteria for each test
            $table->string('test_name');
            $table->string('criteria');
            //this is the foreign key to the donation type table
            $table->foreignId('donation_type_id')->constrained();
            $table->enum('result_type', ['number', 'boolean']);
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
