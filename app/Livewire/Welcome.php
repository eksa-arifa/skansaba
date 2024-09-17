<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        try{
            $berita = Berita::latest()->first();

            if(! $berita){
                throw new \Exception();
            }

            $beritas = Berita::latest()->offset(1)->limit(4)->get();

            if(! $beritas){
                throw new \Exception();
            }

            return view('livewire.welcome', ["berita"=>$berita, "beritas"=>$beritas])->layout('layouts.app');
        }catch(\Exception $e){
            abort($e->getCode()??500, $e->getMessage());
        }
    }
}
