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
        Schema::create('students', function (Blueprint $table) {
            $table->id('Student_id');
            $table->unsignedBigInteger('Student_User_id');
            $table->foreign('Student_User_id')->references('id')->on('users');
            $table->unsignedBigInteger('Student_Department_id');
            $table->foreign('Student_Department_id')->references('Department_id')->on('departments');
            $table->unsignedBigInteger('Student_Course_id');
            $table->foreign('Student_Course_id')->references('Course_id')->on('courses');
            $table->unsignedBigInteger('Student_Semester_id');
            $table->foreign('Student_Semester_id')->references('Semester_id')->on('semesters');
            $table->unsignedBigInteger('Student_Division_id');
            $table->foreign('Student_Division_id')->references('Division_id')->on('divisions');
            $table->string('Student_username');
            $table->integer('Student_rollnumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
