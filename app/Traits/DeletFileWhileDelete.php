<?php

namespace App\Traits;
use Illuminate\Support\Facades\Storage;

trait DeletFileWhileDelete
{
    public static function bootDeletFileWhileDelete()
    {
        static::deleting(function ($model){
            $model->deleteFile();
        });
    }

    public function deleteFile()
    {
        if($this->file_path){
            Storage::disk('public')->delete($this->file_path);
        }
    }
}
