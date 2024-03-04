<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Rusunawa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subname',
        'lantai',
        'tipe',
        'fare',
        'unit'
    ];

    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
}
