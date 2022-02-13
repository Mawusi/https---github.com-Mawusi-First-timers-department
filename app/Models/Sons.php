<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sons extends Model
{
    use HasFactory;

    // protected $primaryKey = 'id'; 
    // public $timestamps = true;

    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'date_of_birth',
        'age',
        'phone',
        'email',
        'church',
        'occupation',
        'hobbies',
        'city',
        'educational_information',
        'father_name',
        'father_contact',
        'mother_name',
        'mother_contact',
        'foundation_school'
    ];
}
