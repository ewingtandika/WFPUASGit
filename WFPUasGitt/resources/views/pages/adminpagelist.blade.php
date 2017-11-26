<html>
<body>

<table border=1>
<tr><td>id</td><td>kodematkul</td><td>nama</td><td>jumlah_sks</td><td>semester</td><td>dosen</td></tr>
@if(count($listmatkul)>0)
@foreach($listmatkul as $listmatkul)

	<tr>
	<td>{{$listmatkul->id}}</td>
	<td>{{$listmatkul->kode_matkul}}</td>
	<td>{{$listmatkul->nama}}</td>
	<td>{{$listmatkul->jumlah_sks}}</td>
	<td>{{$listmatkul->semester}}</td>
	<td></td>
	<td><a href='{{ url("/delete-matkul/{$listmatkul->id}") }}'>hapus</a></td>
	</tr>
@endforeach
@endif
</table>
</body>
</html>