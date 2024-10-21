<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'classroom_id',
        'course_id',
        'teacher_id',
        'day_of_week',
        'start_time',
        'end_time'
    ];
}
