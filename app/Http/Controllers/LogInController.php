<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class LogInController extends Controller
{
        
    public function ShowLogInForm()
    {
        return view('login');
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(!Auth::attempt($credentials)){
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->withInput();
        }
        $user = Auth::user();
        return redirect()->route('dashboard');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
        
    }
    public function providerAuth($provider)
    {
       
        $providerUser = Socialite::driver($provider)->stateless()->user();
       
        $user = User::where('provider_id', $providerUser->id)->first();

        if(!$user){
            $user = User::create([
                'name' => $providerUser->name,
                'email' => $providerUser->email,
                'provider' => $provider,
                'provider_id' => $providerUser->id,
                'password' => bcrypt('password'),
            ]);
            Auth::login($user);
            
            $user = Auth::user();

            return redirect()->route('dashboard');
        }
            Auth::login($user);
            $user = Auth::user();
            return redirect()->route('dashboard');
       
    }
}
