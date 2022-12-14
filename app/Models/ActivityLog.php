<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject', 'user_type', 'url', 'ipv4', 'device',
      ];
      protected $hidden = ['created_at', 'updated_at'];
}
