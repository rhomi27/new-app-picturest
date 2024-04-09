<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    //
    public function redirect(){
        return Socialite::driver("facebook")->redirect();
    }

    public function callbackFacebook(){
        $user = Socialite::driver("facebook")->user();
        $cekUser = User::where('facebook_id', $user->id )->first();
        // dd($user);   
        if($cekUser){
            Auth::login($cekUser);
            return redirect()->intended('/home');
        }else{
            $newUser = User::create([
                'name'=> $user->name,
                'email'=> $user->email,
                'facebook_id' => $user->id,
                'password' => Hash::make('password'),
            ]);
            Auth::login($newUser);
            return redirect()->intended('/home');
        }
    }
}
