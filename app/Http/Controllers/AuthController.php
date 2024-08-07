<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showFormLogin()
    {

        return view('auth.login');
    }
    public function login()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            /**
             * @var User $user
             */
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('list-new')->with('success', 'You have logged in successfully');
            }
    
            return redirect()->route('dashboard'); // Redirect to the dashboard if not admin
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    
    
    public function showFormRegister()
    {

        return view('auth.register');
    }
    public function register()
    {

        $defaultRole = Role::where('roles', 'reader')->first();



        $dataUser = request()->validate([
            'name' => 'required|unique:users,name|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:10',


        ]);

        $user = User::query()->create([
            'name' => $dataUser['name'],
            'email' => $dataUser['email'],
            'password' => bcrypt($dataUser['password']), 
            'role_id' => $defaultRole ? $defaultRole->id : null,
        ]);
        Auth::login($user);
        return redirect()->route('login')
            ->with('success', 'You have registered successfull');
    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        
        return redirect()->route('admin.dashboard');
    }
}
