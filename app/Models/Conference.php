<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = [
        'title',
        'description',
        'date',
        'address',
        'participant_count',
        'city',
    ];

    protected $casts = [
        'date' => 'date',
        'participant_count' => 'integer',
    ];
}
