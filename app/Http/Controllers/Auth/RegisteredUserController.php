<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

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
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate(
            [
                'user_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
                'role_id' => ['required'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ],
            [
                'user_name.required' => 'Enter Your User Name',
                'email.required' => 'Enter Your Email',
                'role_id.required' => 'Must Be Select Your Role',
            ]
        );

        $user = User::create([
            'user_name' => $request->user_name,
            'user_slug' => uniqid(),
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
        ]);

        UserProfile::create([
            'user_id' => $user->id,
            'full_name' => $user->name,
            'balance' => 0,
        ]);

        event(new Registered($user));

        Auth::login($user);

        Session::flash('success', 'User Create Successfully!');

        return redirect()->back();
    }
}
