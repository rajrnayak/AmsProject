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
        Schema::create('allotments', function (Blueprint $table) {
            $table->id("allotment_id");

            $table->unsignedBigInteger("allotment_assignment_id");
            $table->foreign("allotment_assignment_id")->references("assignment_id")->on("assignments");

            $table->unsignedBigInteger("allotment_faculty_id");
            $table->foreign("allotment_faculty_id")->references("Faculty_id")->on("facultys");

            $table->unsignedBigInteger("allotment_department_id");
            $table->foreign("allotment_department_id")->references("Department_id")->on("departments");

            $table->unsignedBigInteger("allotment_course_id");
            $table->foreign("allotment_course_id")->references("Course_id")->on("courses");

            $table->unsignedBigInteger("allotment_semester_id");
            $table->foreign("allotment_semester_id")->references("Semester_id")->on("semesters");

            $table->unsignedBigInteger("allotment_division_id");
            $table->foreign("allotment_division_id")->references("Division_id")->on("divisions");

            $table->unsignedBigInteger("allotment_student_id");
            $table->foreign("allotment_student_id")->references("Student_id")->on("students");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allotments');
    }
};
