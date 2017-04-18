<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/posts', function () {
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
});

Route::get('/about-me', function () {
    return view('about');
});
