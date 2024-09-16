<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;

class BeritaDetail extends Component
{

    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        try{
            $berita = Berita::where("slug", $this->slug)->first();

            if($berita == null){
                throw new \Exception("Not Found", 404);
            }

            return view('livewire.berita.berita-detail', ["berita" => $berita])->layout('layouts.app');
        }catch(\Exception $e){
            abort($e->getCode() ?? 500, $e->getMessage());
        }


    }
}
