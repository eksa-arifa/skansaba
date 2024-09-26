<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;

class Logout extends Component
{

    public function logout()
    {
        \Auth::logout();
        return redirect()->route("login")->with("success","logout success!");
    }
    public function render()
    {
        return view('livewire.admin.auth.logout');
    }
}
