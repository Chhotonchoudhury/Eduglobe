<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniversityComposeMail extends Model
{
    use HasFactory;
    public $guarded = [];
    
    public function university(){
        return $this->belongsTo(University::class , 'university_id');
    }

    public function user(){
        return $this->belongsTo(User::class , 'entry_id');
    }
}
