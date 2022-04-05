<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        "student_lrn",
        "first_name",
        "middle_name",
        "last_name",
        "age",
        "year_level",
        "section",
    ];
}
