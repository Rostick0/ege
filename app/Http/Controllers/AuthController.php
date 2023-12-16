<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAuthRequest;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\RegisterAuthRequest;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginAuthRequest $request)
    {
        if (!auth()->attempt($request->validated(), true)) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        return $this::redirectLog();
    }

    public function register(RegisterAuthRequest $request)
    {
        $user = User::create($request->validated());

        event(new Registered($user));

        auth()->login($user);

        return $this::redirectLog();
    }

    public static function redirectLog() {
        if (auth()->user()?->role === 'student') return redirect()->route('student');
     
        if (auth()->user()?->role === 'teacher') return redirect()->route('teacher');


        return redirect()->route('login');
    }
}
