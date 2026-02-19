<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'job_listings';

    // Mass assignable fields
    protected $fillable = [
        'title',
        'company',
        'location',
        'employer_id', // allow assigning employer
    ];

    // Relationship with Employer
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
