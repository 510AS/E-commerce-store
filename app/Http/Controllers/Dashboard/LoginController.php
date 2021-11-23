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

       if (auth()->guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])) {
            return \redirect()->route('admin.dashboard');
       }


       return redirect()->back()->with('error');

   }

   private function getGaurd()
   {
       return auth('admin');
   }
}
