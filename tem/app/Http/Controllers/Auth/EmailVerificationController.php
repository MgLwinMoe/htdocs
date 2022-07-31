<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
    public function verify(Request $request)
    {
        return view('auth.verify');
    }
    public function verify_signature($id,$hash,EmailVerificationRequest $request)
    {
        $request->fulfill();
     
        return redirect('/home');
    }
    public function verification_notification(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
 
        return back()->with('message', 'Verification link sent!');
    }
}
