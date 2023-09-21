<?php

namespace App\Models;

use App\Notifications\StudentRegisterMailNotification;
use App\Notifications\StudentResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Student extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guard = 'student';
    
    public $guarded = [];

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'country',
    //     'phone',
    //     'age',
    //     'photo',
    //     'course_id',
    //     'university_id',
    //     'entry_id',
    //     'process_status',
    //     'status',
    //     'email_verified_at',
    //     'password',
    //     'passport_no',
    //     'remarks',
    // ];


    public function user(){
        return $this->belongsTo(User::class , 'entry_id');
    }
    
    //verified user
    public function verify_user(){
        return $this->belongsTo(User::class , 'verified_by');
    }
    //refered user
     public function refer_user(){
        return $this->belongsTo(User::class , '	refer_to');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_student');
    }

    public function course(){
        return $this->belongsTo(Course::class , 'course_id');
    }

    public function university(){
        return $this->belongsTo(University::class , 'university_id');
    }

    public function document()
    {
        return $this->belongsToMany(StudentDoc::class, 'student_id');
    }
    
    public function status(){
        return $this->belongsTo(Status::class , 'status_id');
    }
    
    public function emgs(){
        return $this->belongsTo(EMGS_Status::class , 'emg_status');
    }
    
     public function payment(){
        return $this->belongsTo(Payment_status::class , 'StudentPaymentStatus');
    }

        /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function sendEmailVerificationNotification()
    {
        $this->notify(new StudentRegisterMailNotification);
    }


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new StudentResetPasswordNotification($token));
    }





}
