<?php

namespace App\Models;

use App\Traits\DeleteImageWhileDelete;
use App\Traits\DeleteOldFileWhenUpdate;
use App\Traits\DeletFileWhileDelete;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory, DeletFileWhileDelete, DeleteOldFileWhenUpdate;


    protected $fillable = [
        'title',
        'file_path'
    ];



    
}
