<?php

namespace App\Http\Controllers\admin;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index() {
        $post = Post::all();
        return view('admin.posts.index',compact('post'));
    }
    public function create() {
        $post = Post::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create',compact('post', 'categories','tags'));
    }
    public function store(Request $request) {

            $this->validate($request,
            [
                'title' => 'required',
                'editor' => 'required',
                'categories' => 'required',
                'excerpt' => 'required'


            ]);
      $post = new Post;
      $post->title = $request->get('title');
      $post->excerpt = $request->get('excerpt');
      $post->body = $request->get('editor');
      $post->category_id = $request->get('categories');
      $post->published_at = $request->has('date') ? Carbon::parse( $request->get('date')) : null ;
        $post->save();
       //return Post::create($request->all());


       $post->tags()->attach($request->get('tags'));

       return back()->with('flash', 'New post created');
    }
}
