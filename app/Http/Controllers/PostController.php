<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Post;

use DB;


class PostController extends Controller
{
	public function index()
	{
		$post=Post::all();

		// $post=DB::table('posts')
  //  	          ->join('categories','posts.category_id','categories.id')
  //  	          ->join('users','posts.user_id','users.id')
  //  	          ->get();

              return view('posts',compact('post'));
             

	}




	public function Post()
	{
		//$post=Post::all();


		    $post=Post::where('user_id',2)->get();

		// $post=DB::table('posts')
  //  	          ->join('categories','posts.category_id','categories.id')
  //  	          ->join('users','posts.user_id','users.id')
  //  	          ->where('user_id',2)
  //  	          ->get();


   	          return view('posts_by_user',compact('post'));





            

	}
}
