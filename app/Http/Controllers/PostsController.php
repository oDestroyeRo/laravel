<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
    	$posts = [
			[
				'title' => 'My First Title',
				'body' => 'First Body Description'
			],
			[
				'title' => 'My Second Title',
				'body' => 'Second Body Description'
			]
		];

		$date = '18 April 2017';
	    // return view('/posts.index',[
	    // 	'posts' => $posts,
	    // 	'date' => '18 April 2017'
	    // 	]);

	    // return view('/posts.index', compact('date' , 'posts'));
	    return view('/posts.index')
	    	->with('posts' , $posts)
	    	->with('date' , $date);
    }
}
