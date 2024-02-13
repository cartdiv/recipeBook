<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SocialController extends Controller
{
    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }
        // google callback
    public function googleLoginOrRegister(){

        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::where('google_id', $googleUser->id)->first();
        if(!$user)
        {
            $user = User::create(['name' => $googleUser->name, 'email' => $googleUser->email, 'password' => \Hash::make(rand(100000,999999))]);
        }

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    //
}
