<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function signIn()
    {
        return view('auth.signin');
    }

    public function registerNewUser(Request $request)
    {
        $formFields  = $request->validate([
            'name' => ['required', 'min:4', Rule::unique('users', 'name')],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required|min:4'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/admin')->with('message', 'Success !');
    }

    public function loginToAdmin(Request $request)
    {
        $formFields  = $request->validate([
            'email' => ['required'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/admin')->with('massage','Login');


        }

        return back()->withErrors(['email' => 'You have some probems ']);
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect('/login');
    }
}
