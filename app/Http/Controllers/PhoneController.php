<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\User;
use App\Phone ;
use File;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class PhoneController extends Controller
{
    public function index()
   {
   	  $phone=Phone::all();



   	  // $phone=DB::table('phones')
   	  //         ->join('users','phones.user_id','users.id')
   	  //         ->get();


   	   return view('numbers', compact('phone'));
   }
}
