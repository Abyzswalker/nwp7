<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class blogController extends Controller
{
    public function index(){
         
        $posts = Post::orderby('created_at', 'DESC')->get();
         //dd($posts[0]->user->name);
        
        /*$posts = Post::orderby('created_at', 'DESC')->get();
         dd($posts[0]->user->name); */
           
        $posts = Post::orderby('created_at', 'DESC')->paginate(2);
         /*dd($posts);*/
         
        /*$posts = Post::orderby('created_at', 'DESC')->get();
         dd($posts);*/
        
        return view('blog', ['posts' => $posts])->with('description', 'Moderna - Блог')
            ->with('title', 'Moderna - Блог');
    }
      
    
}
    
    /*public function post(){
        
     $post = DB::table('posts')->where()->first();
    
  }
    
}


