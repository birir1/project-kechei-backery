<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rating',
        'comments',
        // Add _token if necessary, but generally you shouldn't include it
        // '_token',
    ];
}