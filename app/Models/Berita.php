<?php

namespace App\Models;

use App\Traits\AutoFillUserId;
use App\Traits\DeleteAttachmentImageWhileDelete;
use App\Traits\Slugable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Berita extends Model
{
    use HasFactory, Slugable, AutoFillUserId, DeleteAttachmentImageWhileDelete;



    protected $fillable = [
        'title',
        'content',
        'slug',
        'user_id'
    ];



    public function attachment(): HasOne{
        return $this->hasOne(Attachment::class);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
