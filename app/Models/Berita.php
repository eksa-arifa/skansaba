<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Berita extends Model
{
    use HasFactory;



    protected $fillable = [
        'title',
        'content',
        'slug'
    ];



    public function attachment(): HasOne{
        return $this->hasOne(Attachment::class);
    }
}
