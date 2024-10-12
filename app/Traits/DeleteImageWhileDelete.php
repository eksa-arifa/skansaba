<?php

namespace App\Traits;
use Illuminate\Support\Facades\Storage;

trait DeleteImageWhileDelete
{
    public static function bootDeleteImageWhileDelete()
    {
        static::deleting(function ($model){
            $model->deleteImage();
        });
    }

    public function deleteImage()
    {
        if($this->image){
            Storage::disk('public')->delete($this->image);
        }
    }
}
