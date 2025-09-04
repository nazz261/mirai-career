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
        Schema::create('jlpt_classes', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->string('day');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('teacher');
            $table->string('location');
            $table->integer('seats');
            $table->decimal('price', 8, 2);
            $table->enum('status', ['available', 'full'])->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jlpt_classes');
    }
};
