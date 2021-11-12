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
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = time().Str::slug($value);
    }
    public function setImageAttribute($value)
    {

         $this->attributes['image'] = url($value);
    }
    /**
     * Acceccors
     * get image
     */

    /**
     * Relationship
     */
    //Blog belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id')->withDefault();
    }
}
