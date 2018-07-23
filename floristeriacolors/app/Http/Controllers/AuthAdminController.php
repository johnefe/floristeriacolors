<?php

namespace FloristeriaColors\Http\Controllers;

use Illuminate\Http\Request;
use FloristeriaColors\Data;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Redirect;

class AuthAdminController extends Controller
{
	use AuthenticatesUsers;

	protected $redirectTo = '/admin';

	
    public function showLogin()
    {
    	return view('auth.login');
    }
   
}
