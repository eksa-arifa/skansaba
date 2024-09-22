<?php

namespace App\Traits;
use App\Models\Major;

trait UseMajor
{
    public $majors = [];

    public function bootUseMajor()
    {
        try{
            $majors = Major::limit(10)->get();

            $this->majors = $majors;
        }catch(\Exception $e){
            abort(500, $e->getMessage());
        }
    }

    public function getSingleMajor($slug)
    {
        try{
            $major = Major::where("slug", $slug)->first();
            if(! $major){
                throw new \Exception("", 404);
            }
            return $major;
        }catch(\Exception $e){
            abort($e->getCode() ?? 500, $e->getMessage());
        }
    }
}
