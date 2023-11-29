<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volunteer extends Model
{
    use HasFactory;

    protected $fillable = ['volunteer_image','name','email','phone_number','gender', 'profession'];

}
