<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    //\App\Post::create([
    //    'title' => 'test title',
    //    'content' => 'test content',
    //]);
    //$post = new \App\Post();
    //$post->title = 'test title2';
    //$post->content = 'test content2';
    //$post->save();
    //$posts = \App\Post::find(1);
//    $post = \App\Post::find(1);
//    $post -> title = 'save title';
//    $post -> content = 'save content';
//    $post -> save();
//    $post = \App\Post::find(1);
//    $post -> delete();

    $post = \App\Post::find(4);
    foreach ($post->comments as $comment){
        echo $comment->content. '<br>';
    }
});
