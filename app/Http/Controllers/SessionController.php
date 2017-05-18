<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
//        dd(request());
        if(!auth()->attempt(request(['email', 'password']))) {

            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
//            return redirect()->back();

        }

        return redirect()->home();

    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
