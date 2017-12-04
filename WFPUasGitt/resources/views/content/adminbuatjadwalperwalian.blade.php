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
                            Input Jadwal Perwalian
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   <form role="form" method="POST" action="{{ url('/simpan-inputperwalian') }}">
                                        <div class="form-group">

                                            
                                     <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                                            <label>Nama</label>
                                            <input style="margin-bottom: 20px;" type="text" name="nama" required class="form-control">
                                            <label>Tanggal Mulai</label>
                                            <input style="margin-bottom: 20px;" type="datetime-local" name="tanggal_mulai" required class="form-control">
                                            <label>Tanggal Selesai</label>
                                            <input style="margin-bottom: 20px;" type="datetime-local" name="tanggal_selesai" required class="form-control">
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