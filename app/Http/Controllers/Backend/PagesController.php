<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Posts;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Backend
 */
class PagesController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index(Posts $posts)
    {
        $all_posts = $posts->get()->all();
        return view('backend.pages',  ['all_posts' => $all_posts]);
    }

    public function addPage()
    {
        //
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'post_id' => 'required',
            'post_title' => 'required',
            'guid' => 'required',
            'post_content' => 'required',
            'hide_title' => 'required',
        ]);
        dump($request);
        $post = Post::find($request->post_id);
        $post->post_title = $request->post_title;
        $post->guid = $request->guid;
        $post->post_content = $request->post_content;
        $post->hide_title = $request->hide_title;
        $post->save();
    }

    public function edit($id)
    {
        $post = Posts::findOrFail($id);
        return view('backend.edit-page', ['post' => $post]);
    }

    public function delete()
    {
        //
    }
}