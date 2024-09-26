<?php

namespace App\Livewire\Admin\CRUD\Berita;

use App\Models\Berita;
use Livewire\Component;
use Livewire\WithPagination;

class BeritaShow extends Component
{
    use WithPagination;

    public function render()
    {
        $berita = Berita::latest()->paginate(10);

        return view('livewire.admin.c-r-u-d.berita.berita-show', ["berita"=>$berita])->layout('layouts.admin');
    }
}
