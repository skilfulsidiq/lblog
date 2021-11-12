@extends('layouts.admin')
@section('content')
      <div class="row">

        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                <div class="float-right">
                    <a href="{{route('admin-update-posts')}}" class="btn btn-primary"> Create Post</a>
                </div>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S/n</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Created Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $b )
                          <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$b->title??''}}</td>
                    <td>{{$b->category->name??''}}</td>
                    <td>{{$b->description}}</td>
                    <td>{{date('d-m-Y', strtotime($b->created_at))}}</td>
                    <td>
                        <a href="{{route('admin-update-posts',$b->slug)}}" class=""><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
                        <a href="{{route('delete-post',$b->slug)}}" onclick="return confirm('Are sure to delete? ')" class="text-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                    @empty

                    @endforelse

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection
