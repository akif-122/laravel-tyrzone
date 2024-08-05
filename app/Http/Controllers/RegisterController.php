<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Adjust model name according to your namespace and casing
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function insert(Request $request)
    {
        try {
            // Validate incoming request
            $request->validate([
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email|unique:users,email',
                // Add other validation rules as needed
            ]);

            // If validation passes, create new user
            $user = new User; // Adjust model name according to your namespace and casing
            $user->f_name = $request->fname;
            $user->last_name = $request->lname;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->country = $request->country;
            $user->postcode = $request->postcode;
            $user->company_name = $request->company;
            $user->company_phone = $request->company_phone;
            $user->password = Hash::make($request->password);

            // Save the user record
            $user->save();

            // Redirect back with success message
            return redirect('/login')->with('success', 'Registration successful!');
        } catch (ValidationException $e) {
            // Redirect back with validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Handle other exceptions
            return redirect()->back()->withInput()->withErrors(['error' => 'Registration failed.']);
        }
    }
    public function verify(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            $users = DB::table('users')
                    ->where('email', $request->input('email'))
                    ->get();
            // Authentication successful
            return view('/user_dashboard',['users'=>$users]); // Redirect to the intended URL after successful login
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['error' => 'Invalid credentials'])->withInput();
        }
    }
    // app/Http/Controllers/Auth/LoginController.php
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
    public function create()
    {
        return view('dashboard'); // Return to the view where the form is located
    }
}
