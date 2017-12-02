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
				NRP:<br>
				Nama:<br>
				Jumlah SKS maksimum yang dapat diambil:
			</div>
			<div style="text-align: left; width: 49%; display: inline-block;">
					<b>{{ $Mahasiswa->nrp }}<br>
			{{ $Mahasiswa->nama }}<br>
				24</b>
			</div>
		</div>
		<div class="widget stacked widget-table action-table">
			<div class="widget-header" style="text-align: center;">
				<!-- <i class="icon-th-list"></i> -->
				<h3>Hasil FPP 1</h3>
			</div> 
			<div class="widget-content">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nomor MK</th>
							<th>Mata Kuliah</th>
							<th>KP</th>
							<th>SKS</th>
							<th class="td-actions">Status</th>
						</tr>
					</thead>
					<tbody>
				
						@foreach ($fpp1 as $key => $fpp1)
						<tr>
							<td>{{ $fpp1->kode_matkul }}</td>
							<td>{{ $fpp1->nama }}</td>
							<td>{{ $fpp1->kp }}</td>
							<td>{{ $fpp1->jumlah_sks }}</td>
							<td>{{ $fpp1->status }}</td>
							
						</tr>
						@endforeach
							<tr>
							<td colspan="3" style="text-align: center;">Jumlah SKS</td>
							<td colspan="2" style="text-align: center;">10</td>
						</tr>
					</tbody>
				</table>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->
		<br>
		<div class="widget stacked widget-table action-table">
			<div class="widget-header" style="text-align: center;">
				<!-- <i class="icon-th-list"></i> -->
				<h3>Hasil FPP 2</h3>
			</div> 
			<div class="widget-content">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nomor MK</th>
							<th>Mata Kuliah</th>
							<th>KP</th>
							<th>SKS</th>
							<th class="td-actions">Status</th>
						</tr>
					</thead>
					<tbody>
						
					
					
						<tr>
							<td colspan="3" style="text-align: center;">Jumlah SKS</td>
							<td colspan="2" style="text-align: center;">10</td>
						</tr>
					</tbody>
				</table>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->
		<br>
		<div class="widget stacked widget-table action-table">
			<div class="widget-header" style="text-align: center;">
				<!-- <i class="icon-th-list"></i> -->
				<h3>Hasil Kasus Khusus</h3>
			</div> 
			<div class="widget-content">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nomor MK</th>
							<th>Mata Kuliah</th>
							<th>KP</th>
							<th>SKS</th>
							<th class="td-actions">Status</th>
						</tr>
					</thead>
					<tbody>
							<td colspan="3" style="text-align: center;">Jumlah SKS</td>
							<td colspan="2" style="text-align: center;">10</td>
						</tr>
					</tbody>
				</table>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->
	</div>
	</div>
	@endsection
