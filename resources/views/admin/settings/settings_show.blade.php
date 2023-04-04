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
      <input name="facebook" type="title" class="form-control" id="facebook" value="{{(isset($settings['facebook']))? $settings['facebook'] : ''}}">
    </div>
      @error('facebook')
      <span class="text-danger">{{$message}}</span>
      @enderror
    <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupSelect01">About us</label>
      <input name="aboutus" type="title" class="form-control" id="email" value="{{(isset($settings['aboutus']))? $settings['aboutus'] : ''}}">
    </div>
      @error('aboutus')
      <span class="text-danger">{{$message}}</span>
      @enderror
    <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupSelect01">Youtube</label>
      <input name="youtube" type="title" class="form-control" id="youtube" value="{{(isset($settings['youtube']))? $settings['youtube'] : ''}}">
    </div>
      @error('youtube')
      <span class="text-danger">{{$message}}</span>
      @enderror
    <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupSelect01">Free phones</label>
      <input name="freephones" type="title" class="form-control" id="freephones" value="{{(isset($settings['freephones']))? $settings['freephones'] : ''}}">
    </div>
      @error('freephones')
      <span class="text-danger">{{$message}}</span>
      @enderror

      <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">Instagram</label>
          <input name="instagram" type="title" class="form-control" id="instagram" value="{{(isset($settings['instagram']))? $settings['instagram'] : ''}}">
      </div>
      @error('instagram')
      <span class="text-danger">{{$message}}</span>
      @enderror
      <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">More About</label>
          <input name="We_are_offering" type="title" class="form-control" id="We_are_offering" value="{{(isset($settings['We_are_offering']))? $settings['We_are_offering'] : ''}}">
      </div>
      @error('We_are_offering')
      <span class="text-danger">{{$message}}</span>
      @enderror
      <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">Address</label>
          <input name="address" type="title" class="form-control" id="We_are_offering" value="{{(isset($settings['address']))? $settings['address'] : ''}}">
      </div>


      <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">E-mail</label>
          <input name="email" type="email" class="form-control" id="email" value="{{(isset($settings['email']))? $settings['email'] : ''}}">
      </div>

      <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupSelect01">Logo</label>
          <input name="logo" type="file" class="form-control" id="logo" value="{{(isset($settings['logo']))? $settings['logo'] : ''}}">
      </div>

{{--      <div class="form-group">--}}
{{--          <label for="exampleInputFile">Logo</label>--}}
{{--          <div class="input-group">--}}
{{--              <div class="custom-file">--}}
{{--                  <input type="file" name="logo" class="form-control" id="exampleInputFile"value="{{(isset($settings['logo']))? $settings['logo'] : ''}}">--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--  </div>--}}



  </div>

</div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
  @endsection
