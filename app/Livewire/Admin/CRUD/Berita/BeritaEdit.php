<?php

namespace App\Livewire\Admin\CRUD\Berita;


use App\Models\Berita;
use Livewire\Component;

class BeritaEdit extends Component
{

    public $id;


    public function mount($id){
        $this->id = $id;
    }


    public function render()
    {
        $berita = Berita::find($this->id);

        return view('livewire.admin.c-r-u-d.berita.berita-edit', ["berita"=>$berita])->layout('layouts.admin');
    }
}
