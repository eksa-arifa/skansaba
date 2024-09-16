<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Berita extends Component
{
    use WithPagination;

    public function render()
    {
        try{
            $berita = \App\Models\Berita::latest()->paginate(6);

            return view('livewire.berita.index', ['berita'=>$berita])->layout('layouts.app');
        }catch(\Exception $e){
            abort(500, $e->getMessage());
        }
    }
}
