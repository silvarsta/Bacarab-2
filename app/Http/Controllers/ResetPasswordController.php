<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request, $token)
    {
        return view('auth.reset', ['token' => $token, 'email' => $request->email]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $response = $this->broker()->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                ])->save();
            }
        );

        return $response == Password::PASSWORD_RESET
            ? redirect()->route('loginreg')->with('status', trans($response))
            : back()->withErrors(['email' => trans($response)]);
    }

    protected function broker()
    {
        return Password::broker();
    }
}
