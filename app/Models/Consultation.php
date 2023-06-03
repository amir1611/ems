<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'dateTime',
        'description',
        'document',
        'location',
        'staff_id',
        'sp_id',
        'app_id',
        'cons_id'
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }

    public function spouse()
    {
        return $this->belongsTo(Spouse::class, 'sp_id');
    }
    
    public function applicant()
    {
        return $this->belongsTo(User::class, 'app_id');
    }

    public function consultant()
    {
        return $this->belongsTo(Consultant::class, 'cons_id');
    }
}
