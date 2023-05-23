<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function notice(){
        return view('verifikasi.verifikasi');
        
    }

    public function verify(EmailVerificationRequest $request){
        $request->fulfill();
        return view('verifikasi.doneVerifikasi');
    }

    public function resend(Request $request){
        $request->user()->sendEmailVerificationNotification();
        return view('verifikasi.verifikasi');
    }
}
