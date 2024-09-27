<?php

namespace App\Livewire\Admin\CRUD\Major;


use App\Models\Major;
use Livewire\Component;

class MajorDelete extends Component
{

    public $id;

    public function delete(){
        try{
            $major = Major::findOrFail( $this->id );
            
            $path = explode("/", $major->image);

            $deleteFile = unlink('storage/images/'.$path[5]);

            if(! $deleteFile){
                throw new \Exception("");
            }

            $delete = Major::destroy($this->id);

            if(!$delete){
                throw new \Exception("");
            }

            return redirect()->route("admin.major")->with("success","deleted successfully!");

        }catch(\Exception $e){
            return redirect()->route('admin.major')->with("error", $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.c-r-u-d.major.major-delete');
    }
}
