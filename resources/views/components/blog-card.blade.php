<div>
    <div class="card" style="width: 18rem; ">
        <img src="{{$blog->image}}" class="card-img-top" alt="..." style="height: 200px">
        <div class="card-body">
            <h5 class="card-title">{{$blog->title??''}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{date('d-m-Y', strtotime($blog->created_at));}}</h6>
            <p class="card-text" style="height: 100px">{{Str::limit($blog->description??'',200)}}</p>
            <div class="btn-group float-right">
              <i class="cursor" data-toggle="dropdown" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"


                    />
                </svg>
              </i>
                <div class="dropdown-menu ">
                    <a href="#" class="dropdown-item" >Edit</a>
                    <a href="#" class="dropdown-item" >Delete</a>
                </div>
                </div>
        </div>
        </div>
</div>
