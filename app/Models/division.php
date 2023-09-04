<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class division extends Model
{
    use HasFactory;
    protected $table = 'divisions';
   	protected $primaryKey = 'Division_id';

    public function DepartmentDetails(): BelongsTo
    {
        return $this->belongsTo(department::class, 'Division_Department_id','Department_id');
    }
    public function CourseDetails(): BelongsTo
    {
        return $this->belongsTo(course::class, 'Division_Course_id','Course_id');
    }
    public function SemesterDetails(): BelongsTo
    {
        return $this->belongsTo(semester::class, 'Division_Semester_id','Semester_id');
    }
}
