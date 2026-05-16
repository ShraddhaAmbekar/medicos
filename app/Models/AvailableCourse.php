<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailableCourse extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function subcourse()
    {
        return $this->belongsTo(Subcourse::class);
    }
}
