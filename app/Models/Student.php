<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'student_code',
        'name_th',
        'name_eng',
        'nick_name',
        'birth_date',
        'telephone',
        'email',
        'facebook',
        'line',
        'affiliation',
        'position',
        'work_description',
        'profile_image',
        'group_id',
        'password'
    ];

    public function group($id){
        return Group::find($id)->name_th;
    } 
    
    public function group_color($id){
        return Group::find($id)->color;
    }
    public function font_color($id){
        return Group::find($id)->font_color;
    }
}
