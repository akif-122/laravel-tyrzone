<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    /**
     * Handle the login request and compare credentials.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Retrieve the email and password from the request
    $email = $validatedData['email'];
    $password = $validatedData['password'];

    // Fetch the admin record from the database based on the provided email
    $admin = Admin::where('email', $email)->first();

    // Check if an admin was found and if the password matches
    if ($admin && $password === $admin->password){
        // Log the user in
        Auth::login($admin);
        request()->session()->regenerate();
        // Redirect to the dashboard with a success message
        return redirect()->route('adminDashboard')->with("succes","Login Successfully");
    }
// If authentication fails, throw a validation exception with a custom message
    throw ValidationException::withMessages([
        'email' => ['The provided credentials are incorrect.'],
    ]);
}
    public function logout(Request $request)
    {
        // Log out the user
        Auth::logout();

        // Invalidate the current session
        $request->session()->invalidate();

        // Regenerate the session token to prevent session fixation attacks
        $request->session()->regenerateToken();

        // Redirect to the homepage or login page
        return redirect('/')->with('success', 'Logged out successfully');
    }
}