<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCourse extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'user_course';

    protected $fillable = [
        'user_id',
        'course_id',
        'register_course_time'
    ];

    public function scopeLearner($query)
    {
        return $query->select('user_id')->groupBy('user_id');
    }
}
