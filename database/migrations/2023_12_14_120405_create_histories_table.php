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
        Schema::create('histories', function (Blueprint $table) {
            $table->id('history_id');

            $table->unsignedBigInteger("history_assignment_id");
            $table->foreign("history_assignment_id")->references("assignment_id")->on("assignments");

            $table->unsignedBigInteger("history_faculty_id");
            $table->foreign("history_faculty_id")->references("Faculty_id")->on("facultys");

            $table->unsignedBigInteger("history_department_id");
            $table->foreign("history_department_id")->references("Department_id")->on("departments");

            $table->unsignedBigInteger("history_course_id");
            $table->foreign("history_course_id")->references("Course_id")->on("courses");

            $table->unsignedBigInteger("history_semester_id");
            $table->foreign("history_semester_id")->references("Semester_id")->on("semesters");

            $table->unsignedBigInteger("history_division_id");
            $table->foreign("history_division_id")->references("Division_id")->on("divisions");

            $table->unsignedBigInteger("history_student_id");
            $table->foreign("history_student_id")->references("Student_id")->on("students");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
