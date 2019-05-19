<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'class_id',
        'teacher_id',
        'student_id',
        'attendence_date',
        'attendence_status'
    ];

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function class() {
        return $this->belongsTo(Grade::class);
    }
}
