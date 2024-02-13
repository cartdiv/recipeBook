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
            $user = User::create([
                'name' => $googleUser->name, 
                'email' => $googleUser->email, 
                'password' => \Hash::make('password')
            ]);
                
         Auth::login($user);
         $nottification = array(
            'message' => 'You have logged in succesfully 🤗 please add a password to your account',
            'alert-type' => 'success',
        );

        return redirect()->route('dashboard')->with($nottification);
        }else{
            $nottification = array(
                'message' => 'Looks like you already own an account 🤗',
                'alert-type' => 'success',
            );
    
            return redirect()->route('login')->with($nottification);
        }

       
       
    }

    //
}
