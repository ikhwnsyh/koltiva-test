<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\SendConfirmationToUser;
use App\Mail\ConfirmationEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', Password::default()],
            'name' => ['required', 'min:3', 'alpha'],
        ]);
        $data = User::create($attributes);
        if ($data) {
            SendConfirmationToUser::dispatch($data);
        }
        return to_route('posts.index')->with('success', 'registered successfully!');
    }
}
