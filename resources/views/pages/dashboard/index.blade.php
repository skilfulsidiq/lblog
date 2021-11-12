@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="widget-small primary coloured-icon">
            <i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Users</h4>
              <p><b>{{$user_count}}</b></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6">
          <div class="widget-small warning coloured-icon">
            <i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Posts</h4>
             <p><b>{{$post_count}}</b></p>
            </div>
          </div>
        </div>

      </div>
@endsection
