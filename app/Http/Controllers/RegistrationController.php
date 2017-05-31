<?php
namespace App\Http\Controllers;
use App\Mail\Welcome;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    public function store()
    {
        // Validate the form
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        // Create and save the user
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        // Sign them in
        auth()->login($user);

        Mail::to($user)->send(new Welcome($user));

        // Redirect to the home page
        return redirect()->home();
    }
}