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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id("assignment_id");
            
            $table->string("assignment_name");

            $table->date("due_CA_date");
            $table->date("due_EA_date");

            $table->unsignedBigInteger("assigned_faculty_id");
            $table->foreign("assigned_faculty_id")->references("Faculty_id")->on("facultys");

            $table->unsignedBigInteger("assigned_department_id");
            $table->foreign("assigned_department_id")->references("Department_id")->on("departments");

            $table->unsignedBigInteger("assigned_course_id");
            $table->foreign("assigned_course_id")->references("Course_id")->on("courses");

            $table->unsignedBigInteger("assigned_semester_id");
            $table->foreign("assigned_semester_id")->references("Semester_id")->on("semesters");

            $table->unsignedBigInteger("assigned_division_id");
            $table->foreign("assigned_division_id")->references("Division_id")->on("divisions");

            $table->string("assignment_description");
            $table->string("assignment_file_path");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
