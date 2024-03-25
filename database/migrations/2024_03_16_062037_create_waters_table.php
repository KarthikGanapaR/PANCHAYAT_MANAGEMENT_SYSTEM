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
        Schema::create('waters', function (Blueprint $table) {
            $table->id();
            $table->string('userImage');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('aadharNumber');
            $table->string('aadharImage');
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
        Schema::dropIfExists('waters');
    }
};
