<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        "email" => "required|email",
        "password" => "required"
    ];

    public function submit()
    {
        $this->validate();

        try{
            if(Auth::attempt(['email'=>$this->email,'password'=>$this->password])){
                return redirect()->route('admin.dashboard')->with('success','Login success');
            }else{
                throw new \Exception();
            }
        }catch(\Exception $e){
            $this->addError("failed", "email or password is incorrect!!!");
        }
    }
    public function render()
    {
        return view('livewire.admin.auth.login')->layout('layouts.auth');
    }
}
