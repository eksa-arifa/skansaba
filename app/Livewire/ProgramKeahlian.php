<?php

namespace App\Livewire;

use App\Traits\UseMajor;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class ProgramKeahlian extends Component
{
    use UseMajor;


    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        return view('livewire.program-keahlian', ["major"=>$this->getSingleMajor($this->slug)])->layout('layouts.app', ['majors'=>$this->majors]);
    }
}
