<?php
namespace App\Services;

use App\Models\Blog;
use App\Traits\Uploadable;

class PostService
{
    use Uploadable;

    public function userPosts($user_id){
        $blog =Blog::with('category:id,name')->where('user_id',$user_id)->orderBy('created_at','desc')->paginate(10);
        return $blog;
    }
    public function allPosts($request){
        $blog =Blog::with('category:id,name');
        if($request['title'] && $request['title'] != ''){
            $blog->where('title','like','%'.$request['title'].'%');
        }
        return $blog->orderBy('created_at','desc')->paginate(10);
    }

    public function createOrUpdatedPost($arr,$slug=null){

        $post = Blog::updateOrCreate(['slug'=>$slug],$arr);
        if($post){
            return $post;
        }
        return false;

    }
    public function showPost($slug){
        $b = Blog::where('slug',$slug)->first();

        return $b;
    }
    public function deletePost($slug){
        $b = Blog::where('slug',$slug)->first();
        if($b->delete()){
            return true;
        }
        return false;
    }
}
