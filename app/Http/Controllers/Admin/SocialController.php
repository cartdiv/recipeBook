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

        $user = Socialite::driver('google')->stateless()->user();

        $this->_registerOrLoginGoogleUser($user);
        // Return home after login 
        return redirect()->route('dashboard');

    }

    protected function _registerOrLoginGoogleUser($incomingUser){

        $user = User::where('google_id', $incomingUser->id)->first();
        if (!$user){
        $user = new User();
        $user->name = $incomingUser->name;
        $user->email = $incomingUser->email;
        $user->google_id = $incomingUser->id;
        $user->password = encrypt ('password'); //make password nullable
        $user->save;
        }
        Auth::login($user);
        }
    //
}
