<?php

namespace App\Http\Controllers\Auth;

use App\Models\User; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite; 
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class GoogleLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
  
  
    public function handleProviderCallback(Request $request)
    {
        $user_google    = Socialite::driver('google')->user();
        $user           = User::where('email', $user_google->getEmail())->first();


        if($user != null){
            auth()->login($user, true);
            return redirect('/');
        }else{
            $create = User::Create([
                'email'             => $user_google->getEmail(),
                'name'              => $user_google->getName(),
                'password'          => 0,
                'picture'           => 'user.jpg',
                'id_role'           => 2,
                'id_kelas'          => 16,
                'email_verified_at' => now()
            ]);
    
            
            auth()->login($create, true);
            return redirect('/');
        }
    }

}