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
                            Tambah Kelas Paralel
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
      
        
                        <form method="POST" role="form" action="{{ url('/simpan-kelas') }}">
                                        <div class="form-group">

                                  
                                            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                                            <label>Kelas Paralel</label>
                                            <input style="margin-bottom: 20px;" type="text" name="kp" required class="form-control">
                                            <label>Kapasitas</label>
                                            <input style="margin-bottom: 20px;" type="number" name="kapasitas" required class="form-control">
                                            <label>ID Matakuliah</label>
                                            <input style="margin-bottom: 20px;" type="text" name="matakuliah_id" required class="form-control">
                                            <label>ID Dosen</label>
                                            <input style="margin-bottom: 20px;" type="text" name="dosen_id" required class="form-control">
                                        </div>
                                        <div style="margin-top: 50px;">
                                            <button style="margin-right: 20px;" type="submit" name="btnsubmit" class="btn btn-default"><b>Submit</b></button>
                                        
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
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