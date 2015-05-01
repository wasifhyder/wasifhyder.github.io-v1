<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::post('contact', function () {
    $data = Input::get('name');
    return View::make('contact')->withInput($data);
});

Route::get('/', array('as' => 'home', function () {
    Auth::logout();
    return View::make('home');
}));

Route::get('about', array('as' => 'about', function () {
    return View::make('about');
}));

Route::get('portfolio', array('as' => 'portfolio', function () {
    return View::make('portfolio');
}));

Route::get('blog', array('as' => 'blog', function () {
    $posts = Post::all();
    return View::make('blog', compact('posts'));
}));

Route::get('contact', array('as' => 'contact', function () {
    return View::make('contact');
}));

Route::post('contact', array('as' => 'contact', function () {
    $rules = array(
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required'
    );
    $validation = Validator::make(Input::all(), $rules);

    if ($validation->fails()) {
        return Redirect::to('contact')->withErrors($validation)->withInput();
    }

    $data = Input::all();
    Mail::send('emails.message', $data, function ($message) {
        $message->to('wasif_hyder@hotmail.com', 'Message from your website!')->subject(Input::get('subject'));
    });

    return Redirect::to('contact')->withInput();
}));

// Show Pages
Route::model('post', 'Post');
Route::group(array('before' => 'auth.basic'), function () {
    Route::get('admin', 'AdminController@index');
    Route::get('admin/create', 'AdminController@create');
    Route::get('admin/edit/{post}', 'AdminController@edit');
    Route::get('admin/delete/{post}', 'AdminController@delete');

    Route::post('admin/create', 'AdminController@handleCreate');
    Route::post('admin/edit', 'AdminController@handleEdit');
    Route::post('admin/delete', 'AdminController@handleDelete');
});