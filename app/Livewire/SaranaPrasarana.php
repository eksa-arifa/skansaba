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
        try{
            $infrastructures = Infrastructure::orderBy('id', 'desc')->paginate(10);

            return view('livewire.sarana-prasarana', ["infrastructures"=>$infrastructures])->layout('layouts.app', ['majors'=>$this->majors]);
        }catch(\Exception $e){
            abort(500, $e->getMessage());
        }
    }
}
