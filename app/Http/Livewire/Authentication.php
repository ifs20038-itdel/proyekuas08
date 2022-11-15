<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Authentication extends Component
{
    public function login(Request $request)
    {
        $response = Http::post('https://cis-dev.del.ac.id/api/jwt-api/do-auth', [
            'email' => $request->input('username'),
            'password' => $request->input('password'),
        ]);

        $credential = $response->json();

        // if(Auth::attempt($credential)){
        //     return redirect()->route('dashboard');
        // }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
