@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Add new category</h1>
@stop

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('admin.product.category.store')}}" method="post" enctype="multipart/form-data">
                    @include('admin.product.category.partials.form')
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