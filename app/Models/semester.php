<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class semester extends Model
{
    use HasFactory;
    protected $table = 'semesters';
   	protected $primaryKey = 'Semester_id';

    public function DepartmentDetails(): BelongsTo
    {
        return $this->belongsTo(department::class, 'Semester_Department_id','Department_id');
    }
    public function CourseDetails(): BelongsTo
    {
        return $this->belongsTo(course::class, 'Semester_Course_id','Course_id');
    }
}
