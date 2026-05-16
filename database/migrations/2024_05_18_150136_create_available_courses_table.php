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
        Schema::create('available_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('university_id');
            $table->unsignedBigInteger('subcourse_id');
            $table->timestamps();
            // Foreign key constraints
            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade');
            $table->foreign('subcourse_id')->references('id')->on('subcourses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('available_courses');
    }
};
