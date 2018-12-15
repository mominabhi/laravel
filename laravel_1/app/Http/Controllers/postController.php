<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function posts()
    {
        $allPost['posts']=Post::all();
        return view('post_list',$allPost);
    }
    public function form()
    {
        return view('posts');
    }
    public function formSubmit(Request $request)
    {
//        dd($request->input());
        $postObj=new Post();
        $postObj->title=$request->input('title');
        $postObj->tag=$request->input('tag');
        $postObj->description=$request->input('description');
        $postObj->save();
        return redirect()->route('post.postList');

    }
    public function edit($id)
    {
        $SelectedPost['post']=Post::find($id);
        return view('edit_post',$SelectedPost);
    }
    public function update(Request $request)
    {
        $id = $request->input('post_id');
        $postObj = Post::find($id);
        $postObj->title = $request->input('title');
        $postObj->tag = $request->input('tag');
        $postObj->description = $request->input('description');
        $postObj->save();
        return redirect()->route('post.postList');
    }
    public function delete($id)
    {
        $deletePost=Post::find($id);
        $deletePost->delete();
        return redirect()->route('post.postList');
    }
}
