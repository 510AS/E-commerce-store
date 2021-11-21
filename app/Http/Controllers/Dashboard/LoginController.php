<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function getLogin()
   {
      return \view('dashboard.auth.login');
   }

   public function login(LoginRequest $request)
   {
      return $request;
   }
}
