<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_requirement extends Model
{
    use HasFactory;
    public $guarded = [];

    public function document(){
        return $this->belongsTo(Student::class , 'student_id');
    }

    // public function studentdoc()
    // {
    //     return $this->belongsTo(StudentDoc::class, 'requirement_id');
    // }

    public function studentdoc()
    {
        return $this->belongsTo(StudentDoc::class, 'requirement_id');
    }

}
