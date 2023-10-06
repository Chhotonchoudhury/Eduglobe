<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    public $guarded = [];

    public function students()
    {
        return $this->hasMany(Student::class, 'status_id');
    }


    public function user(){
        return $this->belongsTo(User::class , 'entry_id');
    }
}
