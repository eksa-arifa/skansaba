<?php

namespace App\Livewire;

use App\Traits\UseMajor;
use Livewire\Component;

class Download extends Component
{
    use UseMajor;
    public function render()
    {
        $downloads = \App\Models\Download::paginate(10);

        return view('livewire.download', ["downloads"=>$downloads])->layout('layouts.app', ['majors'=>$this->majors]);
    }
}
