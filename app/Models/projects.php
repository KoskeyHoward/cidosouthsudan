<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'image',
        'title',
        'description',
        'start-date',
        'end-date',

    ];
}
