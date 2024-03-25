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
        Schema::create('electricities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('aadharNumber');
            $table->string('aadharImage');
            $table->enum('type', ['house', 'shop','factory']);
            $table->enum('voltage', ['low(475V)', 'high(11000V)','extra_high(33000V)']);
            $table->enum('meter', ['single phase', 'three phase','three phase ct']);
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
        Schema::dropIfExists('electricities');
    }
};
