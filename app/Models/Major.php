<?php

namespace App\Models;

use App\Traits\DeleteImageWhileDelete;
use App\Traits\Slugable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Major extends Model
{
    use HasFactory, Slugable, DeleteImageWhileDelete;



    protected $fillable = [
        "image",
        "title",
        "description",
        "slug"
    ];
}
