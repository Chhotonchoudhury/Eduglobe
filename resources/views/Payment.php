<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $guarded = [];

    public function user(){
        return $this->belongsTo(User::class , 'entry_id');
    }
    
    public function course(){
        return $this->belongsTo(Course::class , 'course_id');
    }

    
    public function student(){
        return $this->belongsTo(Student::class , 'student_id');
    }

    public function payType(){
        return $this->belongsTo(PaymentCategory::class , 'type');
    }
}
