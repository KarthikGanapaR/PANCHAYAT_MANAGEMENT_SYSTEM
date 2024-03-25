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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('aadharNumber');
            $table->string('aadharImage');
            $table->string('date')->nullable();
            $table->enum('officer', ['verified', 'not verified']);
            $table->enum('affidavit', ['pending','provided']);
            $table->enum('status', ['pending', 'approved']);
            $table->enum('payment', ['pending', 'approved']);
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
