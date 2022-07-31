<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User2FACode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class User2FACodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }
    public function index()
    {
        if (!Session::has('user_2fa')) {
            auth()->user()->generateCode();
        }
        return view('emails.2fa');
    }
    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
        ]);

        $find = User2FACode::where('user_id', auth()->id())
            ->where('code', $request->code)
            ->where('updated_at', '>=', now()->subMinutes(3))
            ->first();

        if (!is_null($find)) {
            Session::put('user_2fa', auth()->id());
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'You entered wrong code.');
    }
    public function resend()
    {
        auth()->user()->generateCode();

        return back()->with('success', 'We sent you code on your email. Valid for 3 minutes');
    }
}
