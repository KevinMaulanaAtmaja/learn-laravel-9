<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:20|min:3',
            'username' => ['required', 'min:4', 'max:20', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:15'
        ]);

        // cara pertama generate pw
        //$validatedData['password'] = bcrypt($validatedData['password']);

        // cara kedua generate pw
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        //$request->session()->flash('registrasi sukses', 'Registratiton successfull! Please Login');
        return redirect('/login')->with('registrasi-sukses', 'Registratiton successfull! Please Login');
    }
}
