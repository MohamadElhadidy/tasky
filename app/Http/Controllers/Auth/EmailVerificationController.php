<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    public function create()
    {
        return view('auth.verify');
    }




    public function store()
    {
        request()->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    }

    public function update(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect('/');
    }
}
