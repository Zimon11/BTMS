<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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
    public function store(LoginRequest $request): RedirectResponse
{
    // Attempt to authenticate the user
    $request->authenticate();

    // Regenerate the session after successful login
    $request->session()->regenerate();

    // Retrieve the authenticated user
    $user = Auth::user();

    // Redirect based on the user's role
    if ($user->role === 'admin') {
        return redirect()->intended(route('dashboard'));
    } elseif ($user->role === 'driver') {
        return redirect()->intended(route('driver.dashboard'));
    }

    // Default redirect if no role matches
    return redirect()->intended(route('driver.dashboard'));
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
