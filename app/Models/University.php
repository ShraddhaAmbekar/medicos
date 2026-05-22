<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Route model binding using slug
    public function getRouteKeyName()
    {
        return 'university_slug';
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function studyAreas()
    {
        return $this->hasMany(StudyArea::class);
    }

    public function availableCourses()
    {
        return $this->hasMany(AvailableCourse::class);
    }
}
