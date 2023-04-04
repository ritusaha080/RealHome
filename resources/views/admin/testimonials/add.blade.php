@extends('admin.layouts.master')
@section('admin.content')

 <div class="container float-right">
  <div class="card">
      <div class="card-header">

      </div>
      <div class="card-body">

        @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
        @endif



<form action="{{route('testimonial.add')}}" method="post" enctype="multipart/form-data">
  @method('POST')
  @csrf

  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputtitle">Title</label>
      <input name="title" type="title" class="form-control" id="exampleInputTitle" placeholder="Enter title">
    </div>
    @error('title')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <div class="form-group">
      <label for="exampleInputDescription">
        post description
      </label>
      <textarea name="description"class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    @error('description')
      <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
      <label for="exampleInputFile">Image input</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" name="images" class="form-control" id="exampleInputFile">
        </div>
      </div>
    </div>
      @error('images')
      <span class="text-danger">{{$message}}</span>
      @enderror
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
  @endsection
