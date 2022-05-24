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
        'group_id',
    ];
}
