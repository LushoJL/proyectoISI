<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'ci' => ['required', 'string', 'max:10'],
            'birthdate' => ['required', 'string', 'max:10'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['integer', 'max:8'],
            'gender' => ['required'],
            'civil_status' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'nationality' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $concatenar=substr($data['last_name'],0,3);
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'ci' => $data['ci'],
            'birthdate' => $data['birthdate'],
            'address' => $data['address'],
            'nick'=> $concatenar.$data['ci'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'civil_status' => $data['civil_status'],
            'country' => $data['country'],
            'nationality' => $data['nationality'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
