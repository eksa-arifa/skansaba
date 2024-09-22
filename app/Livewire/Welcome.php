<?php

namespace App\Livewire;

use App\Models\Attachment;
use App\Models\Berita;
use App\Traits\UseMajor;
use Livewire\Component;

class Welcome extends Component
{
    use UseMajor;

    public function render()
    {
        try {
            $berita = Berita::latest()->first();

            $beritas = Berita::latest()->offset(1)->limit(4)->get();

            $gallery = Attachment::latest()->limit(12)->get();

            return view('livewire.welcome', ["berita" => $berita, "beritas" => $beritas, "gallery"=>$gallery])->layout('layouts.app', ['majors'=>$this->majors]);
        } catch (\Exception $e) {
            abort(500, $e->getMessage());
        }
    }
}
