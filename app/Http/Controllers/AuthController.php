<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    
    public function auth(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Invalid credentials',
            ], 401);
        }

        $user = Auth::user();
        
        return redirect()->route('admin.dashboard', compact('users'))
        ->with([
            'message' => 'Login successful',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return response()->json([
            'message' => 'Logout successful',
        ]);
    }
}
