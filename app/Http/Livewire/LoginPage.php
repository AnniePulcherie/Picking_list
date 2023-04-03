<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginPage extends Component
{
    public $userLogin;
    public $password;
    public $error;

    public function login(Request $request)
    {
        // $this->error = "Invalid login  or password $this->password $this->userLogin";
        // $validatedData = $request->validate([
        //     'userLogin' => 'required',
        //     'password' => 'required',
        // ]);
        // $this->error = "Invalid login  or password $this->password ";
        // if (Auth::attempt(['user_login' => $this->userLogin, 'password' => $this->password])) {
        //     return redirect()->intended('/dashboard');
        // } else{
        //      $this->error = "Invalid login  or password";
        //    // session()->flash('error', 'Invalid email or password');
        // }
        if($this->userLogin =="agent" && $this->password=="agent"){
            return redirect()->route('orders');
        }else{
            $this->error = "Invalid login  or password";
        }
    }


    public function render()
    {
        return view('livewire.login-page');
    }
}
