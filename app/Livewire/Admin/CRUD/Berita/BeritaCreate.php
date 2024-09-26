<?php

namespace App\Livewire\Admin\CRUD\Berita;

use App\Models\Berita;
use Livewire\Component;
use Livewire\WithPagination;

class BeritaCreate extends Component
{

    public $title;
    public $content;

    

    protected $rules = [
        "title" => "required|max:50",
        "content" => "required"
    ];

    public function submit(){
        $this->validate();
        try{
            $create = Berita::create([
                "title"=> $this->title,
                "content"=> $this->content
            ]);

            if(!$create){
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
