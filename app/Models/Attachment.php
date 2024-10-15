<?php

namespace App\Models;

use App\Traits\DeleteOldFileWhenUpdate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attachment extends Model
{
    use HasFactory, DeleteOldFileWhenUpdate;



    
    protected $fillable = [
        'path',
        'berita_id'
    ];



    public function berita(): BelongsTo{
        return $this->belongsTo(Berita::class);
    }
}
