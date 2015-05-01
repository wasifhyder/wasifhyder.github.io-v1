<?php

class AdminController extends BaseController{
    public function index(){
        $posts = Post::all();
        return View::make('index', compact('posts'));
    }

    public function create(){
        return View::make('create');
    }

    public function handleCreate(){
        $post = new Post;
        $post->title = Input::get('title');
        $post->content = Input::get('content');
        $post->save();

        return Redirect::action('AdminController@index');

    }

    public function edit(Post $post){
        return View::make('edit', compact('post'));
    }

    public function handleEdit(){
        $id = Input::get('post');
        $post = Post::findOrFail($id);
        $post->title = Input::get('title');
        $post->content = Input::get('content');
        $post->save();

        return Redirect::action('AdminController@index');
    }

    public function delete(Post $post){
        return View::make('delete', compact('post'));
    }

    public function handleDelete(){

            $id = Input::get('post');
            $post = Post::findOrFail($id);
            $post->delete();
            return Redirect::action('AdminController@index');
    }
}