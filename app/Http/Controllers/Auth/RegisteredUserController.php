<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    
     /*
    --------------------------------------------------------------------
    Fields Empty for production
    'first_name' => 'required|string|max:255',
    'last_name' =>  'required|string|max:255',
    --------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'gender' => 'required|string|max:255',
            'avatar' => 'string|max:255|nullable',
            'phone' => 'numeric|digits:11|nullable', 
            'role' => 'string|max:255',
        ]);

        //concatenate name field
        $name = $request->first_name .' ' . $request->last_name; 
        
        $user = User::create([
            'name' => $name,
            'email' => $request->email,
            'role' => $request->input('role', 'user'),
            'gender' => $request->gender,
            'avatar' => $request->avatar, 
            'password' => Hash::make($request->password),
            'phone' => $request->phone

        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
