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
        $berita = Berita::where('user_id', auth()->user()->id)->latest()->paginate(10);

        return view('livewire.admin.c-r-u-d.berita.berita-show', ["berita"=>$berita])->layout('layouts.admin');
    }
}
