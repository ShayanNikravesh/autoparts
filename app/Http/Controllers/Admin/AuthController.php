<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        //Checking Credentials
        if (Auth::guard('admin')->attempt($credentials)) {

            //Manager
            $manager = Manager::where('email','=',$request->email)->first();

            //Checking status
            if($manager->status == 'active'){
                
                Alert::success('ورود موفق', 'خوش آمدید.');

                $request->session()->regenerate();

                return redirect()->intended('/');
            }

            return back()->withErrors([
                'email' => 'حساب شما فعال نیست.',
            ])->onlyInput('email');

        }
 
        return back()->withErrors([
            'email' => 'اطلاعات وارد شده مطابقت ندارد.',
        ])->onlyInput('email');
        
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
