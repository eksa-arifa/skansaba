<?php

namespace App\Livewire;

use App\Models\Infrastructure;
use App\Traits\UseMajor;
use Livewire\Component;
use Livewire\WithPagination;

class SaranaPrasarana extends Component
{
    use UseMajor, WithPagination;

    public function render()
    {
            return view('livewire.sarana-prasarana')->layout('layouts.app', ['majors'=>$this->majors]);

    }
}
