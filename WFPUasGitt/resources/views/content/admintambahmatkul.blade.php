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
                            Tambah Mata Kuliah
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                      <form method="POST" role="form" action="{{ url('/simpan-matkul') }}">
                                        <div class="form-group">

                              <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                                            <label>Kode Mata Kuliah</label>
                                            <input style="margin-bottom: 20px;" type="text" name="kode_matkul" required class="form-control">
                                            <label>Nama Mata Kuliah</label>
                                            <input style="margin-bottom: 20px;" type="text" name="nama" required class="form-control">
                                            <label>Jumlah SKS</label>
                                            <input style="margin-bottom: 20px;" type="number" name="jumlah_sks" required class="form-control">
                                            <label>Semester</label>
                                            <select style="margin-bottom: 20px;" name="semester" class="form-control">
                                                <option name="semester"  value="1">Semester 1</option>
                                                <option name="semester"  value="2">Semester 2</option>
                                                <option name="semester"  value="3">Semester 3</option>
                                                <option name="semester" value="4">Semester 4</option>
                                                <option name="semester" value="5">Semester 5</option>
                                                <option name="semester" value="6">Semester 6</option>
                                                <option name="semester" value="7">Semester 7</option>
                                                <option name="semester"  value="8">Semester 8</option>
                                            </select>
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