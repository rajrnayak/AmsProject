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
        Schema::create('semesters', function (Blueprint $table) {
            $table->id('Semester_id');
            $table->unsignedBigInteger('Semester_Department_id');
            $table->foreign('Semester_Department_id')->references('Department_id')->on('departments');
            $table->unsignedBigInteger('Semester_Course_id');
            $table->foreign('Semester_Course_id')->references('Course_id')->on('courses');
            $table->string('Semester_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semesters');
    }
};
