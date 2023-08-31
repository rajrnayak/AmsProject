<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class faculty extends Model
{
    use HasFactory;
    protected $table = 'facultys';
   	protected $primaryKey = 'Faculty_id';

    public function UserDetails(): BelongsTo
    {
        return $this->belongsTo(User::class, 'Faculty_User_id','id');
    }
    public function DepartmentDetails(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'Faculty_Department_id','Department_id');
    }
    public function CourseDetails(): BelongsTo
    {
        return $this->belongsTo(course::class, 'Faculty_Course_id','Course_id');
    }
}
