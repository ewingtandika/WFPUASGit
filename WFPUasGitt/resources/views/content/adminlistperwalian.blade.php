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
	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Perwalian
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Perwalian</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>@if(count($listperwalians)>0)
                                   @foreach($listperwalians as $listperwalians)

                            <tr>
                            <td>{{$listperwalians->id}}</td>
                            <td>{{$listperwalians->nama}}</td>
                            <td>{{$listperwalians->tanggal_mulai}}</td>
                            <td>{{$listperwalians->tanggal_selesai}}</td>
                            <td>{{$listperwalians->status}}</td>
                            <td><a href='{{ url("/delete-perwalian/{$listperwalians->id}") }}'>hapus</a></td>
                            </tr>
                        @endforeach
                        @endif
                                                        </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
	<!-- /.row -->
</div>
@endsection