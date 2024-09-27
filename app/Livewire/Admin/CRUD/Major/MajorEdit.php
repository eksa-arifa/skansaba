<?php

namespace App\Livewire\Admin\CRUD\Major;

use App\Models\Major;
use Livewire\Component;
use Livewire\WithFileUploads;

class MajorEdit extends Component
{

    use WithFileUploads;

    public $id;
    public $image;

    public $name;

    public $description;


    protected $rules = [
        "title" => "required|max:50",
        "description" => "required",
        "image" => "nullable|image|max:5000"
    ];


    public function edit()
    {
        $this->validate();
        try {
            $major = Major::find($this->id);
            if ($this->image) {
                $path = $this->image->store("images", "public");

                if (!$path) {
                    throw new \Exception("");
                }


                $delpath = explode("/", $major->image)[5];

                unlink('storage/images/' . $delpath);


                $update = $major->update([
                    "image" => env("APP_URL") . '/storage/' . $path
                ]);

                if (!$update) {
                    throw new \Exception('');
                }
            }


            $majorUpdate = $major->update([
                "title" => $this->name,
                "description" => $this->description
            ]);


            if(!$majorUpdate){
                throw new \Exception("");
            }


            return redirect()->route('admin.berita')->with('success','successfully edited!');


        } catch (\Exception $e) {
            return redirect()->route('admin.major')->with('error', "failed!");
        }
    }


    public function mount($id)
    {
        $this->id = $id;
    }


    public function render()
    {

        $major = Major::findOrFail($this->id);

        $this->name = $major->title;
        $this->description = $major->description;

        return view('livewire.admin.c-r-u-d.major.major-edit', ["major" => $major])->layout('layouts.admin');
    }
}
