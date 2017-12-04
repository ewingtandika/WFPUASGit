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
	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Kelas Matakuliah
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>KP</th>
                                        <th>ID Matakuliah</th>
                                        <th>ID Dosen</th>
                                        <th>Kapasitas</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr class="odd gradeX">
                                    @if(count($listkelass)>0)
                              @foreach($listkelass as $listkelass)
                                  <tr>
                                        <td>{{$listkelass->id}}</td>
                                        <td>{{$listkelass->kp}}</td>
                                       <td>{{$listkelass->kapasitas}}</td>
                                        <td>{{$listkelass->matakuliah_id}}</td>
                                        <td>{{$listkelass->dosen_id}}</td>
   
                             <td><a href='{{ url("/delete-kelas/{$listkelass->id}") }}'>hapus</a></td>
                                 </tr>
                                @endforeach
                                @endif
                                    </tr>
                                  
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