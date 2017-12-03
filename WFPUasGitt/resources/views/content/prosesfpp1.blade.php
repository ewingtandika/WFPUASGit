@extends('layouts.menumahasiswa')

@section('content')
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">

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
				<b>{{ $Mahasiswa->nrp}}<br>
					{{ Auth::user()->name}}<br>
				24</b>
			</div>
		</div>
		<div class="widget stacked widget-table action-table">
			<div class="widget-header" style="text-align: center;">
				<!-- <i class="icon-th-list"></i> -->
				<h3>{{$id_perwalian[1]}}</h3>
			</div> 
			<div class="widget-content">
				<table class="table table-striped table-bordered" id="tMatkul">
					<thead>
						<tr>
							<th>Nomor MK</th>
							<th>Mata Kuliah</th>
							<th>KP</th>
							<th>SKS</th>
							<th class="td-actions">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($Mahasiswa->KelasParalels as $mk)
						<tr>
							<td>{{ $mk->Matakuliah->kode_matkul }}</td>
							<td>{{ $mk->Matakuliah->nama }}</td>
							<td>{{ $mk->kp }}</td>
							<td>{{ $mk->Matakuliah->jumlah_sks}}</td>
					
								<td class="td-actions">
								@if($mk->pivot->inputperwalian_id == $id_perwalian[0])
							
									<a href="javascript:;" class="btn btn-small" id='{{$mk->id}}' onclick="DeleteKelas(this)">
										<i class="btn-icon-only icon-remove"></i>										
									</a>
								@endif

								</td>
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
		<div>
			@if($id_perwalian[0]>0)

			<form style="margin: 0 auto; width: 570px;" >
				<label style="float: left; margin: 10px;">Nomor MK</label>				
				<input type="text" name="mk" class="span2" id="idmk" style="float:left; margin: 10px;">
				<label style="float: left; margin: 10px;">KP</label>
				<input type="text" name="kp" class="span1" id="idkp" style="float: left; margin: 10px;">
				<input type="button" value="Add" onclick="AddKelas()" class="btn btn-primary" style="float: left; margin: 10px;">
				<input type="button" value="Save" onclick="SaveKelas()" class="btn btn-primary" style="margin: 10px;">
			</form>
			@endif
		</div>
	</div>
</div>

<script type="text/javascript">
	var kelas = new Array();
	//var iduser = 1; // Cari id user, setelah AUTH baru dikerja
	var idPerwalian = {{$id_perwalian[0]}}; //ini FPP 1 atau 2 atau KK???

	function AddKelas(){
		 $.ajax({
                url: "{{ url('/AddMatkul') }}",
                type: 'POST',
                data: { mk: $("#idmk").val(), kp:$("#idkp").val(), _token:'{!! csrf_token()!!}'},
                success: function(response)
                {
                	//alert(response['kp']);
                    var table = document.getElementById("tMatkul");
				    var row = table.insertRow(-1); //-1 berarti paling bawah
				    var cell1 = row.insertCell(0);
				    var cell2 = row.insertCell(1);
				    var cell3 = row.insertCell(2);
				    var cell4 = row.insertCell(3);
				    var cell5 = row.insertCell(4);
				    cell1.innerHTML = response['kode_matkul'];
				    cell2.innerHTML = response['nama'];
				    cell3.innerHTML = response['kp'];
				    cell4.innerHTML = response['sks'];
				    cell5.innerHTML = "button";
		 			kelas.push(["Add",response["kp_id"]]);
		 			//alert(kelas);
                }
            });
	}
	function DeleteKelas(btn) {
		kelas.push(["Del",$(btn).attr('id')]);
		//alert(kelas);
	  var row = btn.parentNode.parentNode;
	  row.parentNode.removeChild(row);
	}

	function SaveKelas(){
		 $.ajax({
                url: "{{ url('/SaveMatkul') }}",
                type: 'POST',
                data: { daftar: kelas,perwalian:idPerwalian, _token:'{!! csrf_token()!!}'},
                success: function(response)
                {               
                	alert(response['response']);
                	kelas = new Array();
                }
            });
	}
	</script>

@endsection