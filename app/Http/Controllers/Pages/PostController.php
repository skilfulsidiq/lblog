<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\PostService;
use App\Traits\Uploadable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends BaseController
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

    public function allPostForAdmin(){
        $blogs = $this->blog->allPostsForAdmin();
        return view('pages/dashboard/all-posts', compact('blogs'));
    }
    public function userPost(){
        $user_id = Auth::user()->id;
        $blogs = $this->blog->userPosts($user_id);
        return view('pages/user-post', compact('blogs'));
    }
    public function index(Request $request){
        $title = $request['title'];
        $blogs = $this->blog->allPosts($request);
        return view('pages/welcome', compact('blogs','title'));
    }
    /**
     * Show post form
     *
     */
    public function showPostForm($slug=null){
        $edit = false;
        $post = "";
        if($slug != null){
            $edit= true;
            $post=$this->blog->showPost($slug);
        }
        $categories = Category::all(['id','name']);
        return view('pages/create-post',compact('edit','post','categories','slug'));
    }
    /**
     * @method updatePost
     * @optional @param $slug
     */
    public function updatePost(Request $request, $slug=null){

         $this->validate($request,['title'=>'required','description'=>'required','category_id'=>'required'
        ]);
            $only = $request->only(['title','description','category_id','image']);
            if($slug==null){
                $request->validate([
                       'image' => 'mimes:jpg,jpeg,png|max:1024',
                   ]);
            }
            if($request->hasFile('image')){
                $file  = $request->validate([
                       'image' => 'mimes:jpg,jpeg,png|max:8192',
                   ]);

                   $file = $this->uploadOne($request['image'],'uploaded_image');
                   $only['image'] = $file;
               }
            $result = $this->blog->createOrUpdatedPost($only,$slug);
            if(!$result){
                 return $this->responseRedirectBack('Error occurred while updating blog.', 'error', true, true);
            }
            if(Auth::user()->user_type=='admin'){
                return $this->responseRedirect('all-posts','Post updated successfully' ,'success',false, false);
            }
            return $this->responseRedirect('welcome','Post updated successfully' ,'success',false, false);

    }
    /**
     * Delete Post
     * @param $slug
     */
    public function deletePost($slug){
        $result = $this->blog->deletePost($slug);
            if(!$result){
                 return $this->responseRedirectBack('Error occurred while deleting blog.', 'error', true, true);
            }
            return $this->responseRedirectBack('Post updated successfully' ,'success',false, false);
    }
}
