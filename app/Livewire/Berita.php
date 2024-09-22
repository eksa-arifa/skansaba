<?php

namespace App\Livewire;

use App\Traits\UseMajor;
use Livewire\Component;
use Livewire\WithPagination;

class Berita extends Component
{
    use WithPagination, UseMajor;

    public function render()
    {
        try{
            $berita = \App\Models\Berita::latest()->paginate(6);

            return view('livewire.berita.index', ['berita'=>$berita])->layout('layouts.app', ['majors'=>$this->majors]);
        }catch(\Exception $e){
            abort(500, $e->getMessage());
        }
    }
}
