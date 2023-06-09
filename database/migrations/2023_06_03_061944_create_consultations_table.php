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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date')->nullable();
            $table->foreignId('slot')->nullable();
            $table->text('description')->nullable();
            $table->string('document')->nullable();
            $table->foreignId('location')->nullable();
            $table->foreignId('staff_id')->nullable();
            $table->foreignId('sp_id')->nullable();
            $table->foreignId('app_id')->nullable();
            $table->foreignId('cons_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
