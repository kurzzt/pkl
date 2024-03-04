<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Retribution extends Model
{
    use HasFactory;

    protected $fillable = [
        'rusunawa_id',
        'uploader_id',
        'nominal',
        'file',
        'status'
    ];

    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
}
