<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use App\Test;
use App\Repositories\Myrepository;

class TestController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function signinForm()
    {
        return view('signinform');
    }

    public function save(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);
        $rep = new Myrepository();
        $rep->signIn($request);
        return redirect()->route("welcome");
    }
}
