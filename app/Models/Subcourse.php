<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcourse extends Model
{
    use HasFactory;
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    protected $guarded = [];
    public function availableCourses()
    {
        return $this->hasMany(AvailableCourse::class);
    }

}
