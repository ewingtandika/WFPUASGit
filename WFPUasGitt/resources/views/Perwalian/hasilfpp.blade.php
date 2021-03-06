@extends('layouts.menumahasiswa')

@section('content')
<?php $totalsksfpp1 = 0;$totalsksfpp2 = 0;$totalskskk = 0; ?>
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
						{{ Auth::user()->name}}<br>
				{{ $Mahasiswa->sks }}</b>
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
							<?php $totalsksfpp1 +=  $fpp1->jumlah_sks;?>
						</tr>
						@endforeach
							<tr>
							<td colspan="3" style="text-align: center;">Jumlah SKS</td>
							<td colspan="2" style="text-align: center;"><?php echo($totalsksfpp1);?></td>
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
						@foreach ($fpp2 as $key => $fpp2)
						<tr>
							<td>{{ $fpp2->kode_matkul }}</td>
							<td>{{ $fpp2->nama }}</td>
							<td>{{ $fpp2->kp }}</td>
							<td>{{ $fpp2->jumlah_sks }}</td>
							<td>{{ $fpp2->status }}</td>
							<?php $totalsksfpp2 +=  $fpp2->jumlah_sks;?>
						</tr>
						@endforeach
							<tr>
							<td colspan="3" style="text-align: center;">Jumlah SKS</td>
							<td colspan="2" style="text-align: center;"><?php echo($totalsksfpp2);?></td>
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
						@foreach ($kk as $key => $kk)
						<tr>
							<td>{{ $kk->kode_matkul }}</td>
							<td>{{ $kk->nama }}</td>
							<td>{{ $kk->kp }}</td>
							<td>{{ $kk->jumlah_sks }}</td>
							<td>{{ $kk->status }}</td>
							<?php $totalskskk +=  $kk->jumlah_sks;?>
						</tr>
						@endforeach
							<tr>
							<td colspan="3" style="text-align: center;">Jumlah SKS</td>
							<td colspan="2" style="text-align: center;"><?php echo($totalskskk);?></td>
						</tr>
					</tbody>
				</table>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->
	</div>
	</div>
	@endsection
