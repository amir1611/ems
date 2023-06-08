<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prep_course extends Model
{
    use HasFactory;
    protected $fillable = [

        'id',
        'app_id',
        'staff_id',
        'payment_proof',
        // 'marriage_requestInfo'

    ];

    public function applicant()
    {
        return $this->belongsTo(User::class, 'app_id');
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }
}
