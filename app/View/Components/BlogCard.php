<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlogCard extends Component
{
    public $title;
    public $image;
    public $date;
    public $category;
    public $description;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$image,$date,$category,$description)
    {
        $this->title = $title;
        $this->image = $image;
        $this->date = $date;
        $this->category = $category;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog-card');
    }
}
