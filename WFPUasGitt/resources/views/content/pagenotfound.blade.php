@extends('layouts.menumahasiswa')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sistem Perencanaan Studi</h1>
            <hr style="height: 0.1px; border: solid; background-color: black;">
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    
    <!-- /.row -->
    <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="alert alert-danger" align="center">
                Pages yang anda cari tidak ada<br> <a href="{{ url('/mainmahasiswa') }}" class="alert-link">Back Home</a>
            </div>
        </div>
        <!-- .panel-body -->
    </div>
    <!-- /.row -->
</div>
@endsection