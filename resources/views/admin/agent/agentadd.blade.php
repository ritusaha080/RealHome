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



<form action="{{route('agent.add')}}" method="post" enctype="multipart/form-data">
  @method('POST')
  @csrf



  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputtitle">Name</label>
      <input name="name" type="title" class="form-control" id="Name" placeholder="Enter agent's name">
    </div>
    @error('name')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
        <label for="exampleInputtitle">Email</label>
        <input name="email" type="E-mail" class="form-control" id="Email" placeholder="Enter email">
      </div>
      @error('e-mail')
      <span class="text-danger">{{$message}}</span>
      @enderror

      <div class="form-group">
        <label for="exampleInputDescription">
        description
        </label>
        <textarea name="description"class="form-control" id="" cols="30" rows="10"></textarea>
      </div>
      @error('description')
        <span class="text-danger">{{$message}}</span>
      @enderror

      <div class="form-group">
      <label for="exampleInputtitle">Phone Number</label>
      <input name="phone" type="title" class="form-control" id="phone" placeholder="Enter agent's phone number">
    </div>
      @error('phone')
      <span class="text-danger">{{$message}}</span>
      @enderror

          <div class="form-group">
            <label for="exampleInputFile">Agent's image </label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name="image" class="form-control" id="exampleInputFile">

              </div>

          </div>
              @error('image')
              <span class="text-danger">{{$message}}</span>
              @enderror

  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
  @endsection
