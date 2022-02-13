<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class First_timer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'alt_phone_number',
        'email',
        'relative_phone_number',
        'gender',
        'age',
        'address',
        'occupation',
        'baptism_status',
        'marital_status',
        'invitation_medium',
        'name_of_inviter',
        'fellowship_of_inviter',
        'contact_of_inviter',
        'salvation_status',
        'date_of_salvation',
        'prayer_requests',
        'service_type',
        'other_service_type',
        'date'
    ];
}
