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


        
<form action="{{route('settings.post')}}" method="post" enctype="multipart/form-data">
  @method('POST')
  @csrf
 


  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputtitle">name</label>
      <input name="name" type="title" class="form-control" id="exampleInputname" placeholder="Enter media type">
    </div>
    @error('name')
    <span class="text-danger">{{$message}}</span>
    @enderror


    <div class="card-body">
        <div class="form-group">
          <label for="exampleInputtitle">value</label>
          <input name="value" type="title" class="form-control" id="exampleInputname" placeholder="Enter link">
        </div>
        @error('value')
        <span class="text-danger">{{$message}}</span>
        @enderror
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
  @endsection 
