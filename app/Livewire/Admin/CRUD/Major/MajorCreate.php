<?php

namespace App\Livewire\Admin\CRUD\Major;


use Livewire\Component;

class MajorCreate extends Component
{
    public function render()
    {
        return view('livewire.admin.c-r-u-d.major.major-create')->layout('layouts.admin');
    }
}
