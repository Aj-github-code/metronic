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
        return view('auth.register_new');
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
            'type_of_business' =>['required', 'string', 'max:255'],
            'type_of_user' =>['required', 'string', 'max:255'],
            'dob' =>['required', 'string', 'max:255'],
            'mobile' =>['required', 'string', 'max:255'],
            'username' =>['required', 'string', 'max:255'],
            'country' =>['required', 'string', 'max:255'],
            // 'state' =>['required', 'string', 'max:255'],
            // 'city' =>['required', 'string', 'max:255'],
            // 'v_mobile' =>['required', 'string', 'max:255'],
            // 'v_email' =>['required', 'string', 'max:255'],
            // 'language' =>['required', 'string', 'max:255']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type_of_business' => $request->type_of_business,
            'type_of_user'=> $request->type_of_user,
            'dob' => $request->dob,
            'mobile' => $request->mobile,
            'username' => $request->username,
            'country' => $request->country,
            // 'state' => $request->state,
            // 'city' => $request->city,
            'v_mobile' => 1,
            'v_email' => 1,
            // 'language' => $request->language,
        ]);

        return response()->json(['status' => 'success', 'data' => $user]);
				 
        // event(new Registered($user));

        
        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
}
