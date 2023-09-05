<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class student extends Model
{
    use HasFactory;
    protected $table = 'students';
   	protected $primaryKey = 'Student_id';

    public function UserDetails(): BelongsTo
    {
        return $this->belongsTo(User::class, 'Student_User_id','id');
    }
    public function DepartmentDetails(): BelongsTo
    {
        return $this->belongsTo(department::class, 'Student_Department_id','Department_id');
    }
    public function CourseDetails(): BelongsTo
    {
        return $this->belongsTo(course::class, 'Student_Course_id','Course_id');
    }
    public function SemesterDetails(): BelongsTo
    {
        return $this->belongsTo(semester::class, 'Student_Semester_id','Semester_id');
    }
    public function DivisionDetails(): BelongsTo
    {
        return $this->belongsTo(division::class, 'Student_Division_id','Division_id');
    }
}
