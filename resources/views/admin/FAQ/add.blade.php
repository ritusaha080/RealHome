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


        
<form action="{{route('faq.save')}}" method="post" enctype="multipart/form-data">
  @method('POST')
  @csrf
 


  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputtitle">Questions</label>
      <input name="questions" type="title" class="form-control" id="exampleInputQuestions" placeholder="Enter Questions">
    </div>
    @error('questions')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <div class="card-body">
        <div class="form-group">
          <label for="exampleInputtitle">Answers</label>
          <input name="answers" type="title" class="form-control" id="exampleInputanswers" placeholder="Enter answers">
        </div>
        @error('answers')
        <span class="text-danger">{{$message}}</span>
        @enderror
    
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
  @endsection 
