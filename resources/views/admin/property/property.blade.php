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



<form action="{{route('property.post')}}" method="post" enctype="multipart/form-data">
  @method('POST')
  @csrf
  {{-- <div class="card-body">
    <div class="form-group">
      <label for="exampleInputtitle">user_id</label>
      <input name="user_id" type="user_id" class="form-control" id="exampleInputuser_id" placeholder="Enter user_id">
    </div>
    @error('user_id')
    <span class="text-danger">{{$message}}</span>
    @enderror --}}
    <div class="card-body">
    <div class="form-group">
      <label for="exampleInputtitle">Client</label>
      <input name="client" type="client" class="form-control" id="exampleInputTitle" placeholder="Enter client name">
    </div>
    @error('client')
    <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="tab-content">
        <div class="tab-pane show active" id="select2-preview">
            <div class="row">
                <div class="col-lg-6">
                    <p class="mb-1 fw-bold text-muted"> Select Category</p>

                    <select class="form-control select2" data-toggle="select2" name="category_id">
                        <option>Select</option>
                        @foreach ($data as $row )
                        <option value="{{$row->id}}">{{$row->category_name}}</option>
                        @endforeach

                    </select>
                    @error('category_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div> <!-- end col -->


            </div> <!-- end row -->
        </div> <!-- end preview-->
{{--     <!-- end tab-content--> --}}



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
          <input type="file" name="image" class="form-control" id="exampleInputFile">
        </div>
    </div>
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputFile">Price</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="text" name="price" class="form-control" id="exampleInputText">
                  @error('price')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>


        {{-- <div class="input-group-append">
          <span class="input-group-text">Upload</span>
        </div> --}}


    </div>
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
