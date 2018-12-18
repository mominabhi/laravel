<?php

namespace App\Http\Controllers;
use App\Tag;
//use Session;
use Illuminate\Http\Request;


class TagController extends Controller
{

    public function index()
    {
        $tags=Tag::all();
        return view('tag.index')->withTags($tags);
    }


    public function store(Request $request)
    {
        $this->validate($request,array('name'=>'required|max:255'));
        $tag=new Tag();
        $tag->name=$request->name;
        $tag->save();
//        Session::flash('success','tag create successfully!');
        return redirect()->route('tag.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
