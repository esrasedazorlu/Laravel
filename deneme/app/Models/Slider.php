<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //protected $guarded = [];
    protected $fillable = [
        'id',	'image', 'created_at','updated_at'
    ];
    use HasFactory;
}
