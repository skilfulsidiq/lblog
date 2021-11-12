<div>
    <div class="card card-radius" style="width: 100%;height:450px ">
        <div class="bg-img" style="background-image: url({{$blog->image}})"></div>
        {{-- <img src="{{$blog->image}}" class="card-img-top" alt="..." style="height: 200px"> --}}
        <div class="card-body">
            <h5 class="card-title font-weight-bold">{{$blog->title??''}}</h5>
            <div class="d-flex justify-content-between"">
                <h6 class="card-subtitle mb-2 text-muted">{{$blog->category->name??''}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{date('d-m-Y', strtotime($blog->created_at))}}</h6>
            </div>

            <p class="card-text" style="height: 100px">{{Str::limit($blog->description??'',200)}}</p>



            <div class="btn-group float-right">
                 @auth
                    @if (Auth::user()->id == $blog->user_id)
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </a>
                    {{-- <i class="cursor" data-toggle="dropdown" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"


                            />
                        </svg>
                    </i> --}}
                        <div class="dropdown-menu ">
                            <a href="{{route('create-post',$blog->slug)}}" class="dropdown-item" >Edit</a>
                            <a href="{{route('delete-post',$blog->slug)}}" onclick="return confirm('Are sure to delete? ')" class="dropdown-item" >Delete</a>
                        </div>

                    @endif
                @else
                    <div style="height: 2rem"></div>
                @endauth

            </div>

        </div>
        </div>
</div>
