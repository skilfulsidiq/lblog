<?php
namespace App\Services;

use App\Models\Blog;
use App\Traits\Uploadable;

class PostService
{
    use Uploadable;

    public function allPosts(){
        return Blog::with('category:id,name')->orderBy('created_at','desc')->paginate(10);
    }

    public function createOrUpdatedPost($arr,$slug=null){

        $post = Blog::updateOrCreate(['slug'=>$slug],$arr);
        if($post){
            return $post;
        }
        return false;

    }
    public function deletePost($slug){
        $b = Blog::where('slug',$slug)->first();
        if($b->delete()){
            return true;
        }
        return false;
    }
}
