<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;


class PagesController extends Controller
{
    public function index(){
       
        //$user_id=auth()->user()->id;
       

    	$title='Welcome';
    	/*return view('pages.index',compact('title')); //pass variable title to index page*/
    	return view('pages.index')->with('title',$title);
    }

    public function about(){
    	return view('pages.about');
    }

    public function services(){
        $data=array(
            'title'=>'Services',
            'services'=>['Service 1','Service 2','Service 3']
        );
    	return view('pages.services')->with($data); 
    }
}
