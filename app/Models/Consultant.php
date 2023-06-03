<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'staff_id',
        'IcNum',
        'name',
        'email',
        'ref_department_id',
        'ref_location_id',
        'phoneNo'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function location()
    {
        return $this->belongsTo(Reference::class, 'ref_location_id');
    }

    public function department()
    {
        return $this->belongsTo(Reference::class, 'ref_department_id');
    }
}
