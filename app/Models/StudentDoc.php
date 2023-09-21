<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDoc extends Model
{
    use HasFactory;
    public $guarded = [];

    public function document(){
        return $this->belongsTo(Student::class , 'student_id');
    }

    public function uploaddoc(){
        return $this->belongsTo(Student::class , 'student_id');
    }
}
