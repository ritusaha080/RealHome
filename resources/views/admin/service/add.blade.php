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



                <form action="{{route('service-post')}}" method="post" enctype="multipart/form-data">
                    @method('POST')
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input name="name" type="title" class="form-control" id="exampleInputname" placeholder="Enter service's name">
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror


                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Description</label>
                                <input name="description" type="title" class="form-control" id="exampleInputdescription" placeholder="Enter service description">
                            </div>
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                    </div> <!-- end col -->

                        <div class="form-group">
                            <label for="exampleInputFile">image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="form-control" id="exampleInputFile">
                                </div>
                            </div>
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

            </div> <!-- end row -->
        </div> <!-- end preview-->
        {{--     <!-- end tab-content--> --}}







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
