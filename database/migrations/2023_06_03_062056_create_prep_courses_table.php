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
        Schema::create('prep_courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('app_id')->nullable();
            $table->foreignId('sp_id')->nullable();
            $table->binary('payment_proof')->nullable();
            $table->binary('marriage_requestInfo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prep_courses');
    }
};
