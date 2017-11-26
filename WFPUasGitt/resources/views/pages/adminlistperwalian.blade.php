<html>
<body>

<table border=1>
<tr><td>id</td><td>nama</td><td>tanggal_mulai</td><td>tanggal_selesai</td>
@if(count($listperwalians)>0)
@foreach($listperwalians as $listperwalians)

	<tr>
	<td>{{$listperwalians->id}}</td>
	<td>{{$listperwalians->nama}}</td>
	<td>{{$listperwalians->tanggal_mulai}}</td>
	<td>{{$listperwalians->tanggal_selesai}}</td>
	<td></td>
	<td><a href='{{ url("/delete-perwalian/{$listperwalians->id}") }}'>hapus</a></td>
	</tr>
@endforeach
@endif
</table>
</body>
</html>