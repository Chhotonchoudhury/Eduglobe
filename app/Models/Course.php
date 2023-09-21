<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $guarded = [];
    
    public function user(){
        return $this->belongsTo(User::class , 'entry_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function requirement()
    {
        return $this->belongsTo(Course_requirement::class, 'course_id');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_student');
    }

    public function university(){
        return $this->belongsTo(University::class , 'university_id');
    }

    public function images(){
        return $this->belongsToMany(CourseImage::class , 'course_id');
    }

    public function pre(){
        return $this->belongsTo(File_pdf::class , 'course_id');
    }

    


    // public static function isCourse($courese_id){
    //     $courseid = Course::select('id')->orderby('id', 'Desc')->limit(1)->pluck('id');
    //     dd($courseid);
    // }
}

