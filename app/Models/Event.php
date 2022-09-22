<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'gym_name',
        'ic_number',
        'gender',
        'weight',
        'tiket_number',
        'age'
    ];
}
