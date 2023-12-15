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
        Schema::create('homework', function (Blueprint $table) {
            $table->id();
            $table->integer('file_id')->nullable();
            $table->text('comment')->nullable();
            $table->foreignId('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('teacher_id')->nullable();
            $table->integer('mark')->nullable();
            $table->string('answer')->nullable();
            $table->integer('answer_file_id')->nullable();
            $table->foreignId('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
            $table->enum('status', ['marked', 'pending'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homework');
    }
};
