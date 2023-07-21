<?php

namespace App\Models\Course;

use App\Models\Department\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function department() {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }
}
