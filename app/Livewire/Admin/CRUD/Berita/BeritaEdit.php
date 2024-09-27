<?php

namespace App\Livewire\Admin\CRUD\Berita;

use App\Models\Attachment;
use App\Models\Berita;
use Livewire\Component;
use Livewire\WithFileUploads;

class BeritaEdit extends Component
{

    use WithFileUploads;

    public $id;
    public $image;

    public $title;
    public $content;


    protected $rules = [
        "title" => "required|max:50",
        "content" => "required",
        "image" => "nullable|image|max:5000"
    ];


    public function edit(){
        $this->validate();
        try{

            if($this->image){

                $path = $this->image->store("images", "public");
    
                if(!$path){
                    throw new \Exception("");
                }
    
                $attachment = Attachment::where("berita_id", $this->id)->first();
    
                $delpath = explode("/", $attachment->path)[5];
    
                unlink('storage/images/'.$delpath);
    
    
                $update = $attachment->update([
                    "path" => env("APP_URL").'/storage/'.$path
                ]);
    
                if(!$update){
                    throw new \Exception('');
                }
            }

            
            $berita = Berita::find($this->id);

            $beritaUpdate = $berita->update([
                "title" => $this->title,
                "content" => $this->content
            ]);


            if(!$beritaUpdate){
                throw new \Exception("");
            }


            return redirect()->route('admin.berita')->with('success','successfully edited!');

        }catch(\Exception $e){
            return redirect()->route('admin.berita')->with("error", 'failed!');
        }
    }


    public function mount($id){
        $this->id = $id;
    }


    public function render()
    {
        $berita = Berita::find($this->id);

        $this->content = $berita->content;
        $this->title = $berita->title;

        return view('livewire.admin.c-r-u-d.berita.berita-edit', ["berita"=>$berita])->layout('layouts.admin');
    }
}
