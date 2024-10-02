<?php

namespace App\Livewire\Admin\CRUD\Major;

use App\Models\Major;
use Livewire\Component;

class MajorEdit extends Component
{
    public $id;


    public function mount($id)
    {
        $this->id = $id;
    }


    public function render()
    {

        $major = Major::findOrFail($this->id);

        return view('livewire.admin.c-r-u-d.major.major-edit', ["major" => $major])->layout('layouts.admin');
    }
}
