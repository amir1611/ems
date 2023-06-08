<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'birthdate',
        'email',
        'ic',
        'gender',
        'phonenumber',
        'nationality',
        'address',
        'age'
    ];

}

// apl_Num
// sp_IcNum
// app_IcNum
// apl_date
// apl_location
// wed_date
// wit_IcNum
// inc_apl_Num
// staff_IcNum
// wali_IcNum
