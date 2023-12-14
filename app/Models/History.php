<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class History extends Model
{
    use HasFactory;

    protected $table = 'histories';
    protected $primaryKey = 'history_id';

    public function AssignmentDetails(): BelongsTo
    {
        return $this->belongsTo(Assignment::class, 'history_assignment_id','assignment_id');
    }
    public function FacultyDetails(): BelongsTo
    {
        return $this->belongsTo(faculty::class, 'history_faculty_id','Faculty_id');
    }
    public function DepartmentDetails(): BelongsTo
    {
        return $this->belongsTo(department::class, 'history_department_id','Department_id');
    }
    public function CourseDetails(): BelongsTo
    {
        return $this->belongsTo(course::class, 'history_course_id','Course_id');
    }
    public function SemesterDetails(): BelongsTo
    {
        return $this->belongsTo(semester::class, 'history_semester_id','Semester_id');
    }
    public function DivisionDetails(): BelongsTo
    {
        return $this->belongsTo(division::class, 'history_division_id','Division_id');
    }
    public function StudentsDetails(): BelongsTo
    {
        return $this->belongsTo(student::class, 'history_student_id','Student_id');
    }
}
