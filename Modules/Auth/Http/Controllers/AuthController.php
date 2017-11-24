<?php

namespace Modules\Auth\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Auth\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Modules\User\Entities\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response

     */
    public function getLogin()
    {
      if (Auth::check()) {
       return redirect(route('list.user'));
     }
     return view('auth::login');
   }


   public function postLogin(LoginRequest $request)
   {
    if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            // 2. auto create session with Auth::user()
        // check nếu user có status là deleted thì quay về login

      return redirect(route('list.user'));
    }
    else{
      $notification = array(
        'message' => 'Tài khoản hoặc mật khẩu sai',
        'alert-type' => 'error'
      );

      return redirect(route('login'))->with($notification);

    }
  }

}
