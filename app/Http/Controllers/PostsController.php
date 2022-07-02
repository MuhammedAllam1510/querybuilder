<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Echo_;

class PostsController extends Controller
{

    public function create()
    {
        return view('Posts.create');
    }


    public function store(Request $request)
    {
           DB::table('posts')->insert([
               'title'=>$request->title ,
               'body'=>$request->body
           ]);

            $posts = DB::table('posts')->get();
            return view('Posts.display' , compact('posts')) ;
    }





    public function Edite($id)
    {
        $posts = DB::table('posts')->where('id' , $id)->first();
        return view('posts.Edite' , compact('posts'));
    }





    public function display()
    {
        $posts = DB::table('posts')->get();
        return view('Posts.display' , compact('posts')) ;
    }


    public function DeletAll()
    {
        DB::table('posts')->delete();
        return redirect()->route('post.display');
    }

    public function Update(Request $request , $id)
    {
        DB::table('posts')->where('id',$id)->update([
            'title'=>$request->title ,
            'body'=>$request->body
        ]);
        return redirect()->route('post.display');
    }




    public function delete(Request $request , $id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->route('post.display');
    }


    public function DeletAllTruncate()
    {
        DB::table('posts')->truncate();
        return redirect()->route('post.display');
    }



}
