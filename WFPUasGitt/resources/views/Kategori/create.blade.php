<h1>Menambahkan data kategori baru</h1>
@foreach ($errors->all() as $error)
<div style="background-color: red; font-weight: bold; color: white; margin-bottom: 2px">
	{{ $error }}
</div>
@endforeach
@if(session('status'))
	<div style="background-color: green; color: white;">
		{{ session('status') }}
	</div>
@endif
<form method="post" action="{{ url('/kategoris')}}">
	<input type="hidden" name="_token" value="{!! csrf_token()!!}"/> 
	<table border="0">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" /></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td><textarea name="deskripsi"></textarea></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="simpan" name="simpan"/>
			</td>
		</tr>
	</table>
</form>
