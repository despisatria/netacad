<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
class LoginController extends Controller {

    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request) {
        return $request->only('nim', 'password');
    }

    public function username() {
        return 'nim';
    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }

    function viewLogin() {
        return view('layouts.app2');
    }
}
