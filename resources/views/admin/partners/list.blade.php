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
                                <th>name</th>
                                <th>logo</th>
                                <th>links</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partners as $partner)
                                <tr>
                                    <td>{{ $partner->id }}</td>
                                    <td>{{ $partner->name}}</td>
                                    <td>
                                        <img src="{{ asset('storage/post-image/' . $partner->logo) }}" alt=""
                                            style="height:100px;width:auto;">

                                    </td>
                                    <td>{{ $partner->links}}</td>


                                </tr>
                                @endforeach
                        </tbody>
                    </table>




                            @endsection
