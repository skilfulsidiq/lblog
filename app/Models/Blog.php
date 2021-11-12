<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title','image','description','category_id','slug'];
       /**
     * Set name and slug
     */
    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    /**
     * Acceccors
     * get image
     */
    public function getImageAttribute(){
         return url($this->attributes['image']);
    }
    /**
     * Relationship
     */
    //Blog belongs to a category
    public function category(){
        return $this->belongsTo(Category::class,'category_id')->withDefault();
    }
}
