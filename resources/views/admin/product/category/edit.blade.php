@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Edit category</h1>
@stop

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{$category->name}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.product.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @include('admin.product.category.partials.form')
                </form>
                <form action="{{ route('admin.product.category.destroy', $category->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="card-footer">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
<!-- /.content -->
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote()
    })
    $(function() {
        bsCustomFileInput.init();
    });
</script>
@stop