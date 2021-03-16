<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=[
            ['id'=>1,'title'=>'laravel','posted_by'=>'ahmed','created_at'=>'2021-3-5'],
            ['id'=>2,'title'=>'php','posted_by'=>'mohamed','created_at'=>'2021-3-12'],
            ['id'=>3,'title'=>'python','posted_by'=>'nora','created_at'=>'2021-1-5'],
        ];
        return view('posts.index',[
            'posts'=>$posts
        ]);
    }

    public function show($id){
        $post=['id'=>1,'title'=>'laravel','posted_by'=>'ahmed','email'=>'ahmed@gmail.com','description'=>'show post description','created_at'=>'2021-3-5'];
        return view('posts.show',[
            'post'=>$post
        ]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        //saving in database
       return redirect()->route('posts.index'); 
    }

    public function edit($id){
        return view('posts.edit',[
            'id'=>$id
        ]);
    }

    public function update(){
          //saving in database
       return redirect()->route('posts.index');
    }

}
