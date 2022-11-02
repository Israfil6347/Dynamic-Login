<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

use Illuminate\Support\Facades\Auth;

use App\Models\User;


use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function facebookRedirect(){
        
        return Socialite::driver('facebook')->redirect();
        
        
    }
    public function loginWithFacebook (){
        Socialite::driver('facebook')->stateless()->user_id();
        
        $findUser = User::where('facebook_id',$user_id)->first();
        if($findUser){
            Auth::login($findUser);
            return redirect('/home');
            
        }else{
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->facebook_id = $user->facebook_id;
            $new_user->password = bcrypt('12345678');
            $new_user->save();
            Auth::login($new_user);
            return redirect('/home');
        }
        
    }
}
