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
                            <th>category_name</th>
                            <th>title</th>
                            <th>description</th>
                            <th>image</th>
                            <th>date</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->blog_category_id }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{\Illuminate\Support\Str::limit($blog->description,100,"...")}}</td>
                                <td>
                                    <img src="{{ asset('storage/post-image/' . $blog->image) }}" alt=""
                                         style="height:100px;width:auto;">
                                </td>
                                <td>
                                    {{$blog->created_at}}
                                </td>

                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{ route('post.edit', $blog->id) }}" type="submit"
                                               class="btn btn-warning">Edit</a>
                                        </div>
                                        <div class="col">
                                            <form action={{ route('post.delete') }} method="POST">
                                                @csrf
                                                <input type="hidden" value={{ $blog->id }} name="id">
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                            </form>
                                        </div>
                                    </div>

                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                        @if ($blogs->hasPages())
                            <div class="pagination-wrapper">
                                {{ $blogs->links() }}
                            </div>
                    @endif

                </div>
            </div>
        </div>
@endsection
