<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class TempAuthController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.temp-login');
    }

    /**
     * Handle login with hardcoded users.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $users = [
            'admin@tijaniyahmuslimpro.com' => [
                'password' => 'admin123',
                'name' => 'Admin User',
                'role' => 'admin'
            ],
            'user@tijaniyahmuslimpro.com' => [
                'password' => 'user123',
                'name' => 'Test User',
                'role' => 'user'
            ],
            'ahmad@example.com' => [
                'password' => 'password123',
                'name' => 'Ahmad Hassan',
                'role' => 'user'
            ],
            'fatima@example.com' => [
                'password' => 'password123',
                'name' => 'Fatima Ali',
                'role' => 'user'
            ],
            'imam@example.com' => [
                'password' => 'password123',
                'name' => 'Imam Abdullah',
                'role' => 'admin'
            ],
        ];

        $email = $request->email;
        $password = $request->password;

        if (isset($users[$email]) && $users[$email]['password'] === $password) {
            // Store user info in session
            session([
                'temp_user' => [
                    'name' => $users[$email]['name'],
                    'email' => $email,
                    'role' => $users[$email]['role']
                ]
            ]);

            return redirect()->intended(route('dashboard', absolute: false))
                ->with('status', 'Login successful! Welcome ' . $users[$email]['name']);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Logout user.
     */
    public function destroy(Request $request): RedirectResponse
    {
        session()->forget('temp_user');
        return redirect('/')->with('status', 'Logged out successfully!');
    }
}
