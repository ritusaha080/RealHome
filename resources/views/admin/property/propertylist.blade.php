@extends('admin.layouts.master')
@section('admin.content')
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            @if (\Illuminate\Support\Facades\Session::has('success'))
                <div class="alert alert-success">
                    {{ \Illuminate\Support\Facades\Session::get('success') }}
                </div>
            @endif
            @if (\Illuminate\Support\Facades\Session::has('posted'))
                <div class="alert alert-success">
                    {{ \Illuminate\Support\Facades\Session::get('posted') }}

                </div>
            @endif
            @if (\Illuminate\Support\Facades\Session::has('edited'))
                <div class="alert alert-success">
                    {{ \Illuminate\Support\Facades\Session::get('edited') }}

                </div>
            @endif

        </div>
        <div class="col">

        </div>
    </div>




    <!-- /.row -->
    <div class="container float-right">
        <div class="row">
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Expandable Table</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>category_id</th>
                                <th>client</th>
                                <th>title</th>
                                <th>description</th>
                                <th>image</th>
                                <th>price</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <@foreach ($properties as $property)
                                <tr>
                                    <td>{{ $property->id }}</td>
                                    <td>{{ $property->category->category_name}}</td>
                                    <td>{{ $property->client}}</td>
                                    <td>{{ $property->title }}</td>
                                    <td>{{\Illuminate\Support\Str::limit($property->description,10,"...")}}</td>
                                    <td>
                                        <img src="{{ asset('storage/post-image/' . $property->image) }}" alt=""
                                            style="height:100px;width:auto;">
                                    </td>
                                    <td>{{ $property->price }}</td>


                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <a href="{{route('property.edit',$property->id)}}"
                                                    class="btn btn-warning">Edit</a>
                                            </div>
                                            <div class="col">
                                                <form action="{{route('property.delete')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value={{ $property->id }} name="id">
                                                    <input type="submit" value="Delete" class="btn btn-danger">
                                                </form>
                                            </div>
                                        </div>



                                    </td>


                                </tr>
                                @endforeach

                        </tbody>
                    </table>
{{--                    {{dd($properties)}}--}}
                    @if ($properties->hasPages())
                        <div class="pagination-wrapper">
                            {{ $properties->links() }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
                            @endsection
