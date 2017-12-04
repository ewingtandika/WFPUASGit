@extends('layouts.menumahasiswa')

@section('content')
<div id="page-wrapper">
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
			<form style="margin: 0 auto; width: 570px;" method="POST" action="{{ url('/CariJadwal') }}">
				<input type="hidden" name="_token" value="{!! csrf_token()!!}"/> 
				<label style="float: left; margin: 10px;">Cari berdasarkan Nama / Kode</label>				
				<input type="text" name="cari" class="span2" style="float:left; margin: 10px;">
				<input type="submit" value="Cari" class="btn btn-primary" style="margin: 10px;">
			</form>
		</div>
		<div class="widget stacked widget-table action-table">
			<div class="widget-header" style="text-align: center;">
				<!-- <i class="icon-th-list"></i> -->
				<h3>Jadwal Mata Kuliah</h3>
			</div> 
			<div class="widget-content">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>				
				<th rowspan="2">Hari</th>
		
						<th align="center" colspan="2" >Jam</th>
		
							<th rowspan="2">Kode MK</th>
							<th rowspan="2">Mata Kuliah</th>
							<th rowspan="2">kp</th>
							<th rowspan="2">Pengajar</th>
							<th rowspan="2">Semester</th>
						</tr>
						<tr>
  					
 			 	<td>Mulai</td>
  				<td>Selesai</td>
				
					</thead>
					<tbody>

	@foreach ($matakuliahs as $key => $matakuliah)
						<tr>
				<td> {{ $matakuliah->hari }}</td>
					
				<td> {{ $matakuliah->waktu_mulai }}</td>

				<td> {{ $matakuliah->waktu_selesai }}</td>

				<td> {{ $matakuliah->kode_matkul }}</td>
	<td> {{ $matakuliah->namaMK }}</td>
	<td> {{ $matakuliah->kp }}</td>
	<td> {{ $matakuliah->namaDosen }}</td>

	<td> {{ $matakuliah->semester }}</td>
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