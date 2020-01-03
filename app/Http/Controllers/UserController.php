<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\User;
use File;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class UserController extends Controller
{
   // public function index()
   // {
   // 	    $user=User::all();



   // 	   // $user=DB::table('users')
   // 	   //       ->join('phones','users.id','phones.user_id')
   // 	   //       ->get();


   // 	   return view('numbers', compact('user'));
   // }

	

}
