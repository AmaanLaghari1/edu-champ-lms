<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherDetail extends Model
{
    use HasFactory, SoftDeletes;

    public $table = "teacher_details";

    protected $fillable = [
        'user_id',
        'university',
        'degree',
        'city',
        'expertise',
        'about'
    ];
}
