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
        Schema::create('facultys', function (Blueprint $table) {
            $table->id('Faculty_id');
            $table->unsignedBigInteger('Faculty_User_id');
            $table->foreign('Faculty_User_id')->references('id')->on('users');
            $table->unsignedBigInteger('Faculty_Department_id');
            $table->foreign('Faculty_Department_id')->references('Department_id')->on('departments');
            $table->unsignedBigInteger('Faculty_Course_id');
            $table->foreign('Faculty_Course_id')->references('Course_id')->on('courses');
            $table->string('Faculty_username');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facultys');
    }
};
