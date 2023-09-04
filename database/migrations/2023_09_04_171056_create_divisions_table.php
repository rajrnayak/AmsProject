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
        Schema::create('divisions', function (Blueprint $table) {
            $table->id('Division_id');
            $table->unsignedBigInteger('Division_Department_id');
            $table->foreign('Division_Department_id')->references('Department_id')->on('departments');
            $table->unsignedBigInteger('Division_Course_id');
            $table->foreign('Division_Course_id')->references('Course_id')->on('courses');
            $table->unsignedBigInteger('Division_Semester_id');
            $table->foreign('Division_Semester_id')->references('Semester_id')->on('semesters');
            $table->string('Division_character');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divisions');
    }
};
