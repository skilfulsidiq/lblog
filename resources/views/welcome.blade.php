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

        <x-blog-card title="Welcome" image="http://" date="10-12-2021" category="Main" description="hejj"/>
   </div>
@endsection
