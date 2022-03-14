<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $table ='variant';
    protected $fillable = [
        'title',
        'model',
        'cost',
        'price',
        'availability',
        'description',
        'product_id',
    ];
}
