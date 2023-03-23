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



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets') }}//dist/css/adminlte.min.css">

    <!-- /.row -->
    <div class="container float-right">
        <div class="row">
        </div>

        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Expandable Table </h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>user_id</th>
                                <th>property_id</th>
                                <th>card_number</th>
                                <th>cardholder_name</th>
                                <th>expired_date</th>
                                <th>cug_number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <@foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $payment->id }}</td>
                                    <td>{{ $payment->property_id }}</td>
                                    <td>{{ $payment->card_number }}</td>
                                    <td>{{ $payment->cardholder_name }}</td>
                                    <td>{{ $payment->expired_date }}</td>
                                    <td>{{ $payment->cug_number}}</td>
                                                                     

                                </tr>
                                @endforeach

                                <!-- jQuery -->
                                <script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>
                                <!-- Bootstrap 4 -->
                                <script src="{{ asset('assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                                <!-- AdminLTE App -->
                                <script src="{{ asset('assets') }}/dist/js/adminlte.min.js"></script>
                                <!-- AdminLTE for demo purposes -->
                                
                            

                    
                            @endsection