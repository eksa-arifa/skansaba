<?php

namespace App\Models;

use App\Traits\DeleteImageWhileDelete;
use App\Traits\DeleteOldFileWhenUpdate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievment extends Model
{
    use HasFactory, DeleteImageWhileDelete, DeleteOldFileWhenUpdate;


    protected $fillable = [
        "image",
        "name",
        "class",
        "competition_field",
        "level",
        "ranking"
    ];
}
