<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assignment extends Model
{
    use HasFactory;

    protected $table = 'assignments';
    protected $primaryKey = 'assignment_id';


    public function FacultyDetails(): BelongsTo
    {
        return $this->belongsTo(faculty::class, 'assigned_faculty_id','Faculty_id');
    }
    public function DepartmentDetails(): BelongsTo
    {
        return $this->belongsTo(department::class, 'assigned_department_id','Department_id');
    }
    public function CourseDetails(): BelongsTo
    {
        return $this->belongsTo(course::class, 'assigned_course_id','Course_id');
    }
    public function SemesterDetails(): BelongsTo
    {
        return $this->belongsTo(semester::class, 'assigned_semester_id','Semester_id');
    }
    public function DivisionDetails(): BelongsTo
    {
        return $this->belongsTo(division::class, 'assigned_division_id','Division_id');
    }

}
