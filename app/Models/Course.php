<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Route model binding using slug
    public function getRouteKeyName()
    {
        return 'courses_slug';
    }

    public function subcourses()
    {
        return $this->hasMany(Subcourse::class);
    }

    public function studyAreas()
    {
        return $this->hasMany(StudyArea::class);
    }
}
