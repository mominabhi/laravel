<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * @method validate(Request $request, array $array)
 */
class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
   {
            return view('auth.passwords.changePassword');
   }
   public function update_password(Request $request)
   {
//        return $request->all();

        $this->validate($request,array(
            'old_password'=>'required',
            'password'=>'required|confirmed'
        ));
        $hastedPassword=Auth::user()->password;
      if(Hash::check($request->old_password,$hastedPassword))
      {
          $user=User::find(Auth::id());
          $user->password=Hash::make($request->password);
          $user->save();
          Auth::logout();
          return redirect()->route('login')->with('successMsg',"password change");
      }
      else
      {
          return redirect()->back();
      }
   }


}
