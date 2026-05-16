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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('country_id');
            $table->string('type');
            $table->string('grade')->nullable();
            $table->year('established_year')->nullable();
            $table->string('medium_of_instruction')->nullable();
            $table->boolean('ecfmg_status')->default(false);
            $table->string('total_course_fees')->nullable();
            $table->string('duration_of_course')->nullable();
            $table->string('eligibility')->nullable();
            $table->string('intake')->nullable();
            $table->string('location')->nullable();
            $table->string('logo')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('image')->nullable();
            $table->text('about')->nullable();
            $table->string('slug')->unique();
            $table->enum('status', ['1', '0'])->default('1');
            $table->timestamps();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
