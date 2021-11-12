<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Traits\Uploadable;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use Uploadable;

    /**
     * post service
     */
    protected $blog;
    /**
     * inject PostService class
     */
    public function __construct(PostService $blog)
    {
        $this->blog = $blog;
    }

    public function index(){
        $blogs = $this->blog->allPosts();
        return view('pages/welcome', compact('blogs'));
    }
    /**
     * Show post form
     *
     */
    public function showPostForm($slug=null){

    }
    /**
     * @method updatePost
     * @optional @param $slug
     */
    public function updatePost(Request $request, $slug=null){

    }
    /**
     * Delete Post
     * @param $slug
     */
    public function deletePost($slug){

    }
}
