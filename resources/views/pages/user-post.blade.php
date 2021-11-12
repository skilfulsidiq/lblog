@extends('layouts.app')
@section('content')
   <div class="container">
       <div class="d-flex justify-content-between mb-5">
         <h4>All Posts</h4>
        <a href="{{route('create-post')}}" class="btn btn-primary">Create Post</a>
       </div>

    
       <div class="row">
             @forelse ($blogs as $blog )
                <div class="col-md-4 mt-4">
                    <x-blog-card :blog="$blog"/>
                </div>
             @empty
             <div class="col-md-12 mt-4 text-center">
                <p class="text-center">No Post found</p>
                <a href="{{route('welcome')}}" class="btn btn-primary"> View All</a>
             </div>
            @endforelse
       </div>
       <div class="mt-5 d-flex justify-content-center">
           {{$blogs->links('vendor.pagination.custom')}}
       </div>

   </div>
@endsection
@push('custom_script')
<script>
    function submit(){
        // var t = $("#title").val();
        // if(t!=''){
        //     t = '';
        // }
        $("#filter").submit();

    }
</script>
@endpush
