<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'first_name',
        'phone_number',
        'service_type',
        'description',
        'email',
    ];
}
