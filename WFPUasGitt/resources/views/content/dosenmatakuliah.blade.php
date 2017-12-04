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
		
		<div class="widget stacked widget-table action-table">
			<div class="widget-header" style="text-align: center;">
				<!-- <i class="icon-th-list"></i> -->
				<h3>Mata Kuliah yang diajar</h3>
			</div> 
			<div class="widget-content">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th >Kode MK</th>
							<th >Mata Kuliah</th>
							<th >kp</th>
							<th >SKS</th>
					</thead>
					<tbody>
						@foreach ($matakuliahs as $key => $matakuliah)
						<tr>
							<td> {{ $matakuliah->kode_matkul }}</td>

							<td> {{ $matakuliah->namaMK }}</td>

							<td> {{ $matakuliah->kp }}</td>

							<td> {{ $matakuliah->sks }}</td>
							@endforeach
						</tr>
					</tbody>
				</table>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->
	</div>
</div>
@endsection