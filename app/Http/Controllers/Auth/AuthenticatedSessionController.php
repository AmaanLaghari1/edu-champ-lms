<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        // return $request->all();
        // $request->authenticate();

        // $request->session()->regenerate();

        $user = User::where('email', $request->log_email)->first();

        if($user == null){
            return response()->json(['title' => 'Failed', 'message' => 'User doesnt exist', 'type' => 'error']);
        }

        if(password_verify($request->log_password, $user->password)){
            Auth::login($user);
            // return redirect()->intended(RouteServiceProvider::HOME);
            return response()->json(['redirect' => route('dashboard'), 'type' => 'success']);
        }
        
        return response()->json(['title' => 'Failed', 'message' => 'Invalid Credintials!', 'type' => 'error']);

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
