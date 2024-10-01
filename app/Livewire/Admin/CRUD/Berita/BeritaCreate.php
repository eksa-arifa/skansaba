<?php

namespace App\Livewire\Admin\CRUD\Berita;

use App\Models\Attachment;
use App\Models\Berita;
use Livewire\Component;
use Livewire\WithFileUploads;

class BeritaCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $content;
    public $image;

    protected $rules = [
        "title" => "required|max:50",
        "content" => "required",
        "image" => "required|image|max:5000"
    ];

    public function submit(){
        $this->validate();
        try{
            $create = Berita::create([
                "title"=> $this->title,
                "content"=> $this->content,
                "user_id" => auth()->user()->id,
            ]);

            if(!$create){
                throw new \Exception();
            }

            $path = $this->image->store("images", "public");

            $attachmentUpload = Attachment::create([
                "berita_id" => $create->id,
                "path" => env("APP_URL").'/storage/'.$path
            ]);

            if(! $attachmentUpload){
                Berita::destroy($create->id);    
                throw new \Exception();
            }

            return redirect()->route("admin.berita")->with("success","berita created successfully!");
        }catch(\Exception $e){
            return redirect()->route("admin.berita")->with("error", 'failed');
        }
    }
    public function render()
    {
        return view('livewire.admin.c-r-u-d.berita.berita-create')->layout('layouts.admin');
    }
}
