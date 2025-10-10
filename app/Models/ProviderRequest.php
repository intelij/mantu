<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RunnerRequest extends Model
{
    Use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'service_type',
        'other_service',
        'location',
        'ownership',
        'other_person',
        'job_date',
        'specific_date',
        'description',
        'has_budget',
        'budget',
        'contact_method',
        'attachment_path',
    ];

    protected $casts = [
        'contact_method' => 'array',
        'specific_date' => 'date',
        'has_budget' => 'boolean',
    ];
}
