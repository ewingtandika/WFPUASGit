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
	<div class="span7" style="width:800px; margin:50px auto; float:none;">
		<br>
		<div style="margin-bottom: 25px;">
			<div style="text-align: right; width: 50%; display: inline-block;">
				Kode Mata Kuliah:<br>
				Nama Mata Kuliah:
			</div>
			<div style="text-align: left; width: 49%; display: inline-block;">
				<b>{{ $Matakuliah->kode_matkul }}<br>
				{{ $Matakuliah->nama }}</b>
			</div>
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
							<th>KP</th>
							<th>Kapasitas</th>
							<th>Jumlah Pendaftar</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($KelasParalel as $key => $KelasParalel)
						<tr>
							<td>{{ $KelasParalel->kp }}</td>
							<td>{{ $KelasParalel->kapasitas }}</td>
							@if($KelasParalel->num_pendaftar > 0)
							<td>{{ $KelasParalel->num_pendaftar }}</td>
							@else
							<td>0</td>
							@endif
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->
	</div>
	 </div>
	<!-- /.row -->
</div>
<a href="{{ url('perwalian') }}">[Kembali]</a>
@endsection
