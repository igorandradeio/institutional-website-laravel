@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>All Posts</h1>
@stop

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        @if(session('message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> {{session('message')}} </h5>

        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Search</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{route('admin.post.search')}}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" name="filter" value="{{ $filters['filter'] ?? '' }}" class="form-control">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Posts</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Author</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td><a href="{{route('admin.post.edit', $post->id)}}">{{$post->title}}</a></td>
                                    <td>{{$post->created_at->format('d/m/Y H:i:s')}}</td>
                                    <td>{{$post->user->name}}</td>
                                </tr>
                                @empty
                                <div>No post found</div>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            @if (isset($filters))
                            {{ $posts->appends($filters)->links() }}
                            @else
                            {{ $posts->links() }}
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop