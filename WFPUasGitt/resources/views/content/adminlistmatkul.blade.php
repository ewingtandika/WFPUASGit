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
                            Daftar Mata Kuliah
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Nama Matakuliah</th>
                                        <th>Jumlah SKS</th>
                                        <th>Semester</th>
                                        <th>Dosen</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
            @foreach($listmatkul as $listmatkul)

                                <tr>
                                <td>{{$listmatkul->id}}</td>
                                <td>{{$listmatkul->kode_matkul}}</td>
                                <td>{{$listmatkul->nama}}</td>
                                <td>{{$listmatkul->jumlah_sks}}</td>
                                <td>{{$listmatkul->semester}}</td>
                                <td></td>
                                <td><a href='{{ url("/delete-matkul/{$listmatkul->id}") }}'>hapus</a></td>
                                </tr>
                @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <button type="button" class="btn btn-primary"><i class="fa fa-angle-double-left"> Kembali</i></button>
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