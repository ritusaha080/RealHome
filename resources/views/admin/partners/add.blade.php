@extends('admin.layouts.master')
@section('admin.content')

 <div class="container float-right">
  <div class="card">
      <div class="card-header">

      </div>
      <div class="card-body"></div> <!-- end row -->
        </div> <!-- end preview-->
{{--     <!-- end tab-content--> --}}





    <div class="form-group">
      <label for="exampleInputFile">Logo</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" name="logo" class="form-control" id="exampleInputFile">
        </div>
    </div>
        @error('logo')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="form-group">
            <label for="exampleInputFile">Links</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="text" name="links" class="form-control" id="exampleInputText">
                  @error('links')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>
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
