<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|min:3|max:255|unique:users,email',
            'password' => 'required|string|min:3|max:255',
        ]);

        $usuario = User::create([
            'name' => $dados['name'],
            'email' => $dados['email'],
            'password' => Hash::make($dados['password']),
        ]);

        Auth::login($usuario);

        return redirect()->route('eventos.index');
    }
}
