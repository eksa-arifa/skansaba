<?php

namespace App\Livewire;

use App\Models\Achievment;
use App\Traits\UseMajor;
use Livewire\Component;

class Prestasi extends Component
{
    use UseMajor;

    public function render()
    {
        $achievments = Achievment::latest()->paginate(10);

        return view('livewire.prestasi', ['achievments' => $achievments])->layout('layouts.app', ['majors' => $this->majors]);
    }
}
