<?php

namespace App\Traits;
use Auth;

trait AutoFillUserId
{
    public static function bootAutoFillUserId()
    {
        static::creating(function($model){
            $model->insertUserId();
        });
    }


    public function insertUserId(){
        $userId = Auth::user()->id;

        if(!$this->user_id){
            $this->user_id = $userId;
        }
    }
}
