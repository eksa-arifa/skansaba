<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievment extends Model
{
    use HasFactory;


    protected $fillable = [
        "image",
        "name",
        "class",
        "competition_field",
        "level",
        "ranking"
    ];
}
