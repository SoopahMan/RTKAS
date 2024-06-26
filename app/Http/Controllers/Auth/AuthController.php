<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akun;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function proses_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    
        $credential = [
            'username' => $request->username,
            'password' => $request->password,
        ];
    
        if (Auth::attempt($credential)) {
            if(Auth::user()->level == 'admin')
            {
                return redirect('dashboard');
            }
            elseif(Auth::user()->level == 'ketuart')
            {
                return redirect('ketua/dashboard');
            }
            elseif(Auth::user()->level == 'bendahara')
            {
                return redirect('bendahara/dashboard');
            }
            elseif(Auth::user()->level == 'warga')
            {
                return redirect('warga/dashboard');
            }
            // $user = Auth::user();
            // $redirectRoutes = [
            //     'admin' => 'dashboard',
            //     'ketuart' => 'ketuart',
            //     'bendahara' => 'bendahara',
            //     'warga' => 'warga',
            // ];
            // return redirect()->intended($redirectRoutes[$user->level] ?? '/');
        }
    
        return redirect('/login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Pastikan kembali username dan password yang dimasukkan benar!']);
    }
    
    public function logout(Request $request)
    {
        $request->session()->flush();

        Auth::logout();
        return redirect('/login');
    }
}