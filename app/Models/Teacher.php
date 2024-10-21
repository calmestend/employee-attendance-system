<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id',
        'course_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id'); // Se asocia con la tabla courses a través de course_id
    }
}
