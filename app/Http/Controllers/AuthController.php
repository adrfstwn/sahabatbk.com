<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(LoginRequest $request)
    {
        $credentials = $request->validated();

        // check if user already registered
        if (!User::where('email', $credentials['email'])->exists()) {
            return redirect()->back()->with(
                'error',
                'Email tidak terdaftar!'
            );
        }

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->with(
                'error',
                'Email atau password salah!'
            );
        }

        if (Auth::user()->hasRole('admin')) {
            $redirectUrl = route('admin.dashboard');

        } else if (Auth::user()->hasRole('student')) {
            $redirectUrl = route('student.lkpd1');
        }

        return redirect()->route('login')->with([
            'success' => 'Login berhasil! selamat datang, ' . Auth::user()->name,
            'redirectUrl' => $redirectUrl
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('home')->with('success', 'Logout successful');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'class' => 'required|string|max:50',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'class' => $validated['class'],
        ]);

        $user->assignRole('student'); // Assign default role

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('verification.notice');
    }

    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm($token)
    {
        return view('auth.reset-password', ['token' => $token, 'email' => request('email')]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => $password,
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
