<?php

namespace App\Traits;
use Illuminate\Support\Facades\Storage;

trait DeleteAttachmentImageWhileDelete
{
    
    public static function bootDeleteAttachmentImageWhileDelete()
    {
        static::deleting(function($model){
            $model->deleteImage();
        });
    }
    public function deleteImage()
    {
        if($this->attachment->path){
            Storage::disk('public')->delete($this->attachment->path);
        }
    }
}
