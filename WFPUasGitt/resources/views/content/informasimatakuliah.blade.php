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
	<div class="span7" style="width:800px; margin:50px auto; float:none;">
		<br>
		<div style="margin-bottom: 25px;">
			<div style="text-align: right; width: 50%; display: inline-block;">
				Jurusan:<br>
				Tahun Ajaran:
			</div>
			<div style="text-align: left; width: 49%; display: inline-block;">
				<b>Teknik Informatika<br>
				Gasal 2017-2018</b>
			</div>
		</div>
		<div>
			<form style="margin: 0 auto; width: 570px;" method="POST" action="{{ url('/CariPerwalian') }}">
				<input type="hidden" name="_token" value="{!! csrf_token()!!}"/> 
				<label style="float: left; margin: 10px;">Cari berdasarkan Nama / Kode</label>				
				<input type="text" name="cari" class="span2" style="float:left; margin: 10px;">
				<input type="submit" value="Cari" class="btn btn-primary" style="margin: 10px;">
			</form>
		</div>
		<div class="widget stacked widget-table action-table">
			<div class="widget-header" style="text-align: center;">
				<!-- <i class="icon-th-list"></i> -->
				<h3>Informasi Mata Kuliah</h3>
			</div> 
			<div class="widget-content">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Kode MK</th>
							<th>Mata Kuliah</th>
							<th>Smt</th>
							<th>Jumlah Sks</th>
						</tr>
					</thead>
					<tbody>

	@foreach ($matakuliahs as $key => $matakuliah)
						<tr>
				<td> {{ $matakuliah->kode_matkul }}</td>
					<td> <a href="{{ url('perwalian/'.$matakuliah->id) }}">{{ $matakuliah->nama }}</a></td>
						<td> {{ $matakuliah->semester }}</td>
							<td> {{ $matakuliah->jumlah_sks}}</td>
	
			</tr>
			@endforeach
						<tr>
							<td colspan="5">nanti mungkin jadi halaman</td>
						</tr>
						<tr>
							<td colspan="5">yang ini mungkin jadi info halaman</td>
						</tr>
					</tbody>
				</table>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->
	</div>
</div>
@endsection