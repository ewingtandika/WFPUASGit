@extends('layouts.menumahasiswa')

@section('content')
	<?php $totalsks = 0; ?>
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
							@if($mk->pivot->status != "Ditolak")
							<tr>
								<td>{{ $mk->Matakuliah->kode_matkul }}</td>
								<td>{{ $mk->Matakuliah->nama }}</td>
								<td>{{ $mk->kp }}</td>
								<td id='{{"sks".$mk->id}}'>{{ $mk->Matakuliah->jumlah_sks}}</td>
								<?php $totalsks +=  $mk->Matakuliah->jumlah_sks;?>
									<td class="td-actions">
									@if($mk->pivot->inputperwalian_id == $id_perwalian[0] )
										@if($id_perwalian[0]<=2)
										<a href="javascript:;" class="btn btn-small" id='{{$mk->id}}' onclick="DeleteKelas(this)">
											<i class="btn-icon-only icon-remove"></i></a>
										@endif
									@endif

									</td>
							</tr>
							@endif
					@endforeach
						<tr>
							<td colspan="3" style="text-align: center;">Jumlah SKS</td>
							<td colspan="2" style="text-align: center;" id="idsks"><?php echo($totalsks);
					?></td>
						</tr>
					</tbody>
				</table>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->
		<br>
		<div>
			@if($id_perwalian[0]>0)
			<datalist id="matkuls">
				  <!-- <option value="Internet Explorer"> -->
						@foreach ($Matakuliah as $mk)
							<option value="{{$mk->nama .'('.$mk->kode_matkul.')'}}" id="{{$mk->id}}"></option>
						@endforeach
			</datalist>
			<datalist id="kps">
				  <option value="Internet Explorer">
			</datalist>

			<form style="margin: 0 auto; width: 570px;" >
				<label style="float: left; margin: 10px;">Nomor MK</label>
				<input list="matkuls" name="matkul" id="idmk" class="span2" style="float:left; margin: 10px;">				
				<!-- <input type="text" name="mk" class="span2" id="idmk" style="float:left; margin: 10px;"> -->
				<label style="float: left; margin: 10px;">KP</label>
				<input list="kps" name="kp" class="span1" id="idkp" style="float: left; margin: 10px;">

				
				

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
		var mk = datalistFind('matkuls','idmk');
		var dtmk = document.getElementById("matkuls");
		var kp = datalistFind('kps','idkp');
		var dtkp = document.getElementById("kps");
		//alert(mk +' ' + kp);
		if(mk >=0 && kp >= 0)
		{
		 $.ajax({
                url: "{{ url('/AddMatkul') }}",
                type: 'POST',
                data: { mk: dtmk.options[mk].id, kp:dtkp.options[kp].id, ttlsks:document.getElementById("idsks").innerHTML, _token:'{!! csrf_token()!!}'},
                success: function(response)
                {
                	if(response['hasil']>0)
                	{
	                	//alert(response['kp']);
	                    var table = document.getElementById("tMatkul");
	                    $('#tMatkul tr:last').before("<tr><td>"+response['kode_matkul']+"</td><td>"+response['nama']+"</td><td>"+response['kp']+"</td><td id='sks"+response["kp_id"]+
					    	"'>"+response['sks']+"</td><td><a href='javascript:;' class='btn btn-small' id='"+response["kp_id"]+
					    	"' onclick='DeleteKelas(this)'><i class='btn-icon-only icon-remove'></i></a></td></tr>")
					    // var row = table.insertRow(-1); //-1 berarti paling bawah
					    // var cell1 = row.insertCell(0);
					    // var cell2 = row.insertCell(1);
					    // var cell3 = row.insertCell(2);
					    // var cell4 = row.insertCell(3);
					    // var cell5 = row.insertCell(4);
					    // cell1.innerHTML = ;
					    // cell2.innerHTML = response['nama'];
					    // cell3.innerHTML = response['kp'];
					    // cell4.innerHTML = response['sks'];
					    // cell5.innerHTML = "";
					    
			 			kelas.push(["Add",response["kp_id"]]);
			 		

			 			document.getElementById("idsks").innerHTML=parseInt(document.getElementById("idsks").innerHTML)+response['sks'];
			 			//alert(kelas);
		 			}
		 			else{alert(response['message']);}
		 				document.getElementById("idkp").value='';
			 			document.getElementById("idmk").value='';
                }
            });
		}
		else{
			alert("data yang kamu masukkan masih salah, silahkan dicek kembali");
		}
	}
	function DeleteKelas(btn) {
		kelas.push(["Del",$(btn).attr('id')]);
		document.getElementById("idsks").innerHTML=parseInt(document.getElementById("idsks").innerHTML)-parseInt(document.getElementById("sks"+$(btn).attr('id')).innerHTML);
		//alert(kelas);
	  var row = btn.parentNode.parentNode;
	  row.parentNode.removeChild(row);
	}

	function SaveKelas(){
		if(kelas.length>0)
		{
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
		else{
			alert("kamu belum memasukkan data apapun");
		}
	}

	document.getElementById('idmk').addEventListener('input', function () {
	 var x = document.getElementById("matkuls");
	 var y = document.getElementById("idmk");
	   for (i = 0; i < x.options.length; i++) {
	        if(x.options[i].value == y.value)
	        {
	        	 //alert();
	        	$.ajax({
                url: "{{ url('/FindKp') }}",
                type: 'POST',
                data: { id_mk: x.options[i].id, _token:'{!! csrf_token()!!}'},
                success: function(response)
                {               
                	document.getElementById('kps').innerHTML = '';
                	var arkp = response['kp'];

                	//arkp.forEach(AddOption);
                	populate_datalist_from_array('kps', arkp);
                	document.getElementById("idkp").value='';//arkp[0]['kp'];
                }
            });
	        }
	       
	    }
	});

	function datalistFind(datalst, lst){
		var x = document.getElementById(datalst);
	 	var y = document.getElementById(lst);
	 	 for (i = 0; i < x.options.length; i++) {
	        if(x.options[i].value == y.value)
	        {
	        	return i;
	        }
	    }
	    return -1;
	}

	function AddOption(item,index)
	{
		kp = document.getElementById("idkp");
		kp.innerHTML = kp.innerHTML + "<option value='"+ item['kp']+"' id='"+ item['id']+"' ></option>";
		alert(item['kp']);
	}
	function populate_datalist_from_array(list_id, list_str)
	{
	    clearChildren( list_id );
	    var arr = eval ( list_str );
	    for (var i = 0; i < arr.length; i++) {
	        var opt = document.createElement('option');
	        opt.id = arr[i]['id'];
	        opt.value = arr[i]['kp'];
	        document.getElementById(list_id).appendChild(opt);
	    }
	}

	function clearChildren( parent_id ) {
	    var childArray = document.getElementById( parent_id ).children;
	    if ( childArray.length > 0 ) {
	        document.getElementById( parent_id ).removeChild( childArray[ 0 ] );
	        clearChildren( parent_id );
	    }
	}

	
	</script>

@endsection