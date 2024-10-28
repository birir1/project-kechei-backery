<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // Specify the fillable attributes
    protected $fillable = [
        'name',    // Add this line for mass assignment
        'email',
        'feedback',
    ];
}