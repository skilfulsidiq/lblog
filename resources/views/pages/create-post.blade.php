@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                    <h4 class="text-center ">{{$edit?'Update':'Create'}} Post</h4>
                <form class="mt-3" action="{{($edit) ?route('update-post',$slug):route('update-post')}}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                     @csrf
                    <div class="form-group">
                        <label for="">Category</label>
                       <select name="category_id" id="" class="form-control">
                            <option value="{{$edit?$post->category_id:''}}" select>{{$edit?$post->category->name:'select'}}</option>
                           @forelse ($categories as $c )
                           <option value="{{$c->id}}">{{$c->name}}</option>
                           @empty

                           @endforelse

                       </select>
                        @if ($errors->has('category_id')) <p class="help-block text-danger">{{ $errors->first('category_id') }}</p> @endif
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$edit?$post->title??null:''}}">
                        @if ($errors->has('title')) <p class="help-block text-danger">{{ $errors->first('title') }}</p> @endif
                    </div>
                    <div class="form-group">
                        <label for="de">Description</label>
                        <textarea name="description" class="form-control" id="de" cols="30" rows="3">{{$edit?$post->description??null:''}}
                        </textarea>
                         @if ($errors->has('description')) <p class="help-block text-danger">{{ $errors->first('description') }}</p> @endif
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                         @if ($errors->has('image')) <p class="help-block text-danger">{{ $errors->first('image') }}</p> @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">{{$edit?'Update':'Create'}} Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('custom_script')
<script>

</script>
@endpush
