<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class course extends Model
{
    use HasFactory;
    protected $table = 'courses';
   	protected $primaryKey = 'Course_id';

    public function DepartmentDetails(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'Course_Department_id','Department_id');
    }

}
