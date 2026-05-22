<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Route model binding using slug
    public function getRouteKeyName()
    {
        return 'country_slug';
    }

    public function universities()
    {
        return $this->hasMany(University::class);
    }
}
