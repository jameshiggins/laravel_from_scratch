<?php
namespace App\Http\Controllers;
use App\Http\Requests\RegistrationForm;
//use App\Mail\Welcome;
//use App\User;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    public function store(RegistrationForm $form)
    {

        $form->persist();



        // Redirect to the home page
        return redirect()->home();
    }
}