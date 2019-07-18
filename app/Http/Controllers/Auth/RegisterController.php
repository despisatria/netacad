<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller {
    
  use RegistersUsers;

  protected $redirectTo = '/home';

  public function __construct() {
    $this->middleware('guest');
  }

  protected function validator(array $data) {
    return Validator::make($data, [
      'name' => ['required', 'string', 'max:255'],
      'password' => ['required', 'string',],
    ]);
  }

  protected function create(array $data) {
    return User::create([
      'name' => $data['name'],
      'nim' => $data['nim'],
      'level' => 1,
      'password' => Hash::make($data['password']),
    ]);
  }
}
