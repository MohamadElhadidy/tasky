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
        try {
    request()->user()->sendEmailVerificationNotification();
    return response()->json(['message' => 'Verification email sent successfully.']);
} catch (\Exception $e) {
            dd($e);
    // Log the exception for debugging
    \Log::error('Failed to send email verification: ' . $e->getMessage());

    return response()->json([
        'error' => 'Failed to send email verification. Please try again later.',
    ], 500);
}
    }

    public function update(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect('/');
    }
}
