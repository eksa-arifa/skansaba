<?php

namespace App\Traits;
use Storage;

trait DeleteOldFileWhenUpdate
{
    public static function bootDeleteOldFileWhenUpdate()
    {
        static::updating(function($model){
            $model->deleteOldFile();
        });
    }

    public function deleteOldFile()
    {
        if($this->isDirty('file_path')){
            $oldfilepath = $this->getOriginal('file_path');

            if($oldfilepath && Storage::disk('public')->exists($oldfilepath)){
                Storage::disk('public')->delete($oldfilepath);
            }
        }else if($this->isDirty('image')){
            $oldfilepath = $this->getOriginal('image');

            if($oldfilepath && Storage::disk('public')->exists($oldfilepath)){
                Storage::disk('public')->delete($oldfilepath);
            }
        }else if($this->isDirty('path')){
            $oldfilepath = $this->getOriginal('path');

            if($oldfilepath && Storage::disk('public')->exists($oldfilepath)){
                Storage::disk('public')->delete($oldfilepath);
            }
        }
    }
}
