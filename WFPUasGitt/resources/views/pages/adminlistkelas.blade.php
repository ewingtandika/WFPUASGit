<html>
<body>

<table border=1>
<tr><td>id</td><td>kp</td><td>kapasitas</td><td>id_matkul</td><td>id_dosen</td>
@if(count($listkelass)>0)
@foreach($listkelass as $listkelass)

	<tr>
	<td>{{$listkelass->id}}</td>
	<td>{{$listkelass->kp}}</td>
	<td>{{$listkelass->kapasitas}}</td>
	<td>{{$listkelass->id_matkul}}</td>
	<td>{{$listkelass->id_dosen}}</td>
	<td></td>
	<td><a href='{{ url("/delete-kelas/{$listkelass->id}") }}'>hapus</a></td>
	</tr>
@endforeach
@endif
</table>
</body>
</html>