<?php

namespace App\Livewire\Admin\CRUD\Major;

use App\Models\Major;
use Livewire\Component;
use Livewire\WithPagination;

class MajorShow extends Component
{
    use WithPagination;


    public function render()
    {
        $major = Major::latest()->paginate(10);

        return view('livewire.admin.c-r-u-d.major.major-show', ["major"=>$major])->layout('layouts.admin');
    }
}
