<?php

namespace App\Livewire;

use App\Traits\HasNavigation;
use App\Traits\UseMajor;
use Livewire\Component;

class Gallery extends Component
{
    use UseMajor;
    public function render()
    {
        return view('livewire.gallery')->layout('layouts.app', ['majors'=>$this->majors]);
    }
}
