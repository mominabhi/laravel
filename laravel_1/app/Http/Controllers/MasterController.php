<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Admins'] = Admin::all();
        return view('manage_admin', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->input());
        $objAdmin = new Admin();
        $objAdmin->name = $request->input('name');
        $objAdmin->email = $request->input('email');
        $objAdmin->id_num = $request->input('id_num');
        $objAdmin->save();
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['Admin'] = Admin::find($id);
        return view('form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $objAdmin = Admin::find($id);
        $objAdmin->name = $request->input('name');
        $objAdmin->email = $request->input('email');
        $objAdmin->id_num = $request->input('id_num');
        $objAdmin->save();
        return redirect()->route('admin.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objAdmin = Admin::find($id);
        $objAdmin->delete();
        return redirect()->route('admin.index');

    }

    public function form()
    {
        return view('form');
    }

    /**
     * @return mixed
     */
    public function home()
    {
        $name = "mominAbhi";
        $email = "gfdjhfd@gmail.com";
        $array = [];
        $array['email'] = "gfdjhfd@gmail.com";
        $array['name'] = "Abhi";
        return view("welcome", $array);
    }

    public function templating()
    {
        $template = view('blade_templating');
        return view('bladeMaster');
    }

    public function hulululu()
    {
        return view('blade_templating');
    }
}
