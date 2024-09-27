<?php

namespace App\Livewire\Admin\CRUD\Berita;

use App\Models\Attachment;
use App\Models\Berita;
use Livewire\Component;

class BeritaDelete extends Component
{

    public $id;

    public function delete(){
        try{
            $attachment = Attachment::where("berita_id", $this->id)->first();
            
            $path = explode("/", $attachment->path);

            $deleteFile = unlink('storage/images/'.$path[5]);

            if(! $deleteFile){
                throw new \Exception("");
            }

            $delete = Berita::destroy($this->id);

            if(!$delete){
                throw new \Exception("");
            }

            return redirect()->route("admin.berita")->with("success","deleted successfully!");

        }catch(\Exception $e){
            return redirect()->route('admin.berita')->with("error", $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.c-r-u-d.berita.berita-delete');
    }
}
