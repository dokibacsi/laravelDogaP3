<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{

    use HasFactory;

    protected $primaryKey = ['flight_id' ,'user_id'];
    protected $fillable = [
        'evaluation'
    ];
}
