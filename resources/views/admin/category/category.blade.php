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


        
<form action="{{route('category.post')}}" method="post" enctype="multipart/form-data">
  @method('POST')
  @csrf
 


  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputtitle">Category_Name</label>
      <input name="category_name" type="title" class="form-control" id="exampleInputCategory_Name" placeholder="Enter category name">
    </div>
    @error('category_name')
    <span class="text-danger">{{$message}}</span>
    @enderror
    
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
  @endsection 
