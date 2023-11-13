<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    
    
    public function __construct()
{
    $this->middleware('guest');
}
public function showLinkRequestForm()
{
    $this->middleware('auth');
    return view('auth.passwords.email');
}


}
