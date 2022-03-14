<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'professors';
    protected $fillable = [
        'firstname',
        'lasttname',
        'contact',
        'email',
        'subject',
    ];
}
