<?php

namespace App\Livewire\Admin\CRUD\Major;


use App\Models\Major;
use Livewire\Component;
use Livewire\WithFileUploads;

class MajorCreate extends Component
{
    use WithFileUploads;

    public $name;

    public $description;
    public $image;

    protected $rules = [
        "name" => "required|max:50",
        "description" => "required",
        "image" => "required|image|max:5000"
    ];

    public function submit(){
        $this->validate();
        try{
            $path = $this->image->store("images", "public");

            if(!$path){
                throw new \Exception();  
            }

            $major = Major::create([
                "title" => $this->name,
                "description"=> $this->description,
                "image"=> env("APP_URL"). '/storage/' .$path
            ]);

            if(!$major){
                throw new \Exception();
            }

            return redirect()->route('admin.major')->with('success','data inserted successfully!');
        }catch(\Exception $e){
            return redirect()->route("admin.major")->with("error", $e->getMessage());
        }
        
    }
    public function render()
    {
        return view('livewire.admin.c-r-u-d.major.major-create')->layout('layouts.admin');
    }
}
