<?php

namespace App\Livewire;

use App\Traits\HasNavigation;
use App\Traits\UseMajor;
use Livewire\Component;

class OrganisasiSiswa extends Component
{
    use UseMajor;
    public function render()
    {
        return view('livewire.organisasi-siswa')->layout('layouts.app', ['majors'=>$this->majors]);
    }
}
