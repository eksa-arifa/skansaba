<?php

namespace App\Models;

use App\Traits\DeleteImageWhileDelete;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievment extends Model
{
    use HasFactory, DeleteImageWhileDelete;


    protected $fillable = [
        "image",
        "name",
        "class",
        "competition_field",
        "level",
        "ranking"
    ];
}
