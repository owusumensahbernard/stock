<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginregisterController extends Controller
{

    public function index()
    {
        return view('registration.login');
    }


    public function register()
    {
      return view('registration.register');
    }

    public function create(request $request)
    {
$attributes = request()->validate([
'username' => 'required|min:3|max:255',
    'email' => 'required|email|max:255|unique:users|',
    'password' => 'required|min:7|max:255',

]);

$attributes['password'] = bcrypt($attributes['password']);

$user = User::create($attributes);

        session()->flash('success', 'Account Created Successfully!');
        return redirect('/');


    }

}
