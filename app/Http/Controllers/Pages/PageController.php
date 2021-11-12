<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Services\PostService;
use Illuminate\Http\Request;

class PageController extends BaseController
{
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
    public function dashboard(){
        $user_count = User::count();
        $post_count = Blog::count();
        return view('pages.dashboard.index',compact('user_count','post_count'));
    }
    public function showPostForm($slug=null){
        $edit = false;
        $post = "";
        if($slug != null){
            $edit= true;
            $post=$this->blog->showPost($slug);
        }
        $categories = Category::all(['id','name']);
        return view('pages/dashboard/create-post',compact('edit','post','categories','slug'));
    }
}
