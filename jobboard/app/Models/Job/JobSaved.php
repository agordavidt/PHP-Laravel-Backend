<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSaved extends Model
{
    use HasFactory;

    protected $table = 'jobsaved';


    protected $fillable = [
        'jobsaved_id',
        'job_id',
        'user_id',
        'job_title',
        'job_image',
        'job_title',
        'job_region',
        'job_type',
        'company',
        
    ];

    # laravel timestamp
    public $timestamps = true;
}
