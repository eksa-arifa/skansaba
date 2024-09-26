<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChangePassword extends Component
{
    public $password;
    public $password_confirmation;


    protected $rules = [
        "password" => "required|confirmed|min:4"
    ];

    public function submit()
    {
        $this->validate();


        try{
            $user = User::where("email", Auth::user()->email);

            $user = $user->update(["password"=> bcrypt($this->password)]);
    
            if($user){
                return redirect()->route('admin.settings')->with("success","password changed successfully!");
            }else{
                throw new \Exception();
            }
        }catch(\Exception $e){
            return redirect()->route('admin.settings')->with("error", $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.change-password');
    }
}
