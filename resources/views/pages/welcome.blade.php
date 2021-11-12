@extends('layouts.app')
@section('content')
   <div class="container">
       <h4>All Posts</h4>
       <div class="row d-flex justify-content-center">
           <div class="col-md-4">
                 <div class="form-group">
                    <input type="text" class="form-control" placeholder="Filter by title">
                </div>
           </div>
       </div>
       <div class="row">
             @forelse ($blogs as $blog )
                <div class="col-md-4 mt-4">
                    <x-blog-card :blog="$blog"/>
                </div>
             @empty

       @endforelse
       </div>


       {{$blogs->links()}}

   </div>
@endsection
