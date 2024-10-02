<?php

namespace App\Livewire\Admin\CRUD\Berita;

use Livewire\Component;

class BeritaCreate extends Component
{
    public function render()
    {
        return view('livewire.admin.c-r-u-d.berita.berita-create')->layout('layouts.admin');
    }
}
