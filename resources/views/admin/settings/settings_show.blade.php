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


        
<form action="{{route('settings.settingsSave')}}" method="post" enctype="multipart/form-data">
  @method('POST')
  @csrf
 


  <div class="card-body">
    <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupSelect01">Facebook</label>
      <input name="facebook" type="title" class="form-control" id="facebook" value="{{ $settings['facebook'] }}">
    </div>
    <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupSelect01">Youtube</label>
      <input name="youtube" type="title" class="form-control" id="youtube" value="{{ $settings['youtube'] }}">
    </div>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
  @endsection 
