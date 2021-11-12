@extends('layouts.admin')
@section('content')
    <div class="row">

        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S/n</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Email</th>
                    <th>Created Date</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($users as $b )
                          <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$b->name??''}}</td>
                    <td>{{$b->user_type??''}}</td>
                    <td>{{$b->email??''}}</td>
                    <td>{{date('d-m-Y', strtotime($b->created_at))}}</td>

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
