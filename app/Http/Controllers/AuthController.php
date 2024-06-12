<?php

namespace App\Http\Controllers;

use App\Models\WebsiteUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');

            Log::info('Attempting login with email: ' . $credentials['email']);

            // Retrieve user by email
            $user = \App\Models\WebsiteUser::where('email', $credentials['email'])->first();

            if ($user) {
                Log::info('User found: ' . $user->email);

                // Verify the password
                if (Hash::check($credentials['password'], $user->password)) {
                    Log::info('Password matches');
                } else {
                    Log::error('Password does not match');
                    return back()->withErrors(['password' => 'Invalid password']);
                }
            } else {
                Log::error('No user found with email: ' . $credentials['email']);
                return back()->withErrors(['email' => 'No user found with this email']);
            }

            // Attempt to authenticate using the correct guard
            if (Auth::guard('website-user')->attempt($credentials)) {
                Log::info('Login successful for email: ' . $credentials['email']);
                Session::flash('flash_message', ['type' => 'success', 'message' => 'Login successful']);
                return redirect()->route('/');
            } else {
                Log::error('Login failed for email: ' . $credentials['email']);
                return back()->withErrors(['email' => 'Invalid credentials']);
            }
        } catch (\Exception $e) {
            Log::error('An error occurred during login: ' . $e->getMessage());
            return back()->withErrors(['email' => 'An unexpected error occurred. Please try again later.']);
        }
    }




    public function showRegistrationForm()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:website_users,email',
            'password' => 'required|min:6',
        ]);

        $user = new WebsiteUser();
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        // Flash success message
        return redirect()->route('user.login')->with('flash_message', [
            'type' => 'success',
            'message' => 'Registration successful. Please login.'
        ]);    }

    public function logout(Request $request)
    {
        Auth::guard('website-user')->logout();

        // Flash logout message
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Log::info('User logged out successfully'); // Log the message before the return statement

        return redirect()->route('/')->with('logout-flash_message', [
            'type' => 'success',
            'message' => 'Logged out successfully.'
        ]);
    }


}
