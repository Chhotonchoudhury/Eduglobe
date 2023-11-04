<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    public $guarded = [];

    public function students()
    {
        return $this->hasMany(Student::class, 'student_id');
    }
}
