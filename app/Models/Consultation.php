<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'date',
        'slot',
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
        return $this->belongsTo(User::class, 'staff_id');
    }

    public function spouse()
    {
        return $this->belongsTo(Spouse::class, 'sp_id');
    }
    
    public function applicant()
    {
        return $this->belongsTo(Applicantc::class, 'app_id');
    }

    public function consultant()
    {
        return $this->belongsTo(Consultant::class, 'cons_id');
    }

    public function location()
    {
        return $this->belongsTo(Reference::class, 'ref_location_id');
    }

    public function slot()
    {
        return $this->belongsTo(Reference::class, 'ref_slot_id');
    }
}
