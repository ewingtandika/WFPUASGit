<html>
<body>
<h1>Admin Control Panel</h1>
<br>
Tambahkan Perwalian
<br/>

<form method="POST" action="{{ url('/simpan-inputperwalian') }}">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
		<label>nama<input type="text" name="nama"></label><br>
		<label>tanggal_mulai<input type="datetime-local" name="tanggal_mulai"></label><br>
		<label>tanggal_selesai<input type="datetime-local" name="tanggal_selesai"></label><br>
		
		<input type="submit" name="btnSubmit">
</form>

<a href="{{ url('/list-matkul') }}">show matkuls</a><br>
<a href="{{ url('/tambah-kelas') }}">Tambah Kelas Paralel</a><br>
<a href="{{ url('/list-perwalian') }}">List Perwalian</a><br>

</body>
</html>