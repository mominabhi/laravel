<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Admin;
session_start();
class AdminController extends Controller
{
    public function login()
    {
        if (Session::has('id')) {
            return Redirect::to('/admin_list');
        } else {
            return view('admin_login');
        }
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function check(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        $check = Admin::where('name', $name)
            ->where('password', $password)
            ->first();
        if ($check) {
            Session::put('name', $check->name);
            Session::put('password', $check->password);
            Session::put('id', $check->id);
            return Redirect::to('/admin_list');

        } else {
            Session::put('exception', 'Email or password is invalid');
            return Redirect::to('/login');
        }
    }

    public function admin_list()
    {
        if(!Session::has('id'))
        {
            return Redirect::to('/login');
        }
        else
        {
            $admin['admins'] = Admin::all();
            return view('admin_table', $admin);
        }
    }

    public function logout()
    {
        Session::flush();
        return Redirect::to('/login');
    }
}
