<html>
<body>
<h1>Admin Control Panel</h1>
<br>
Tambahkan Kelas
<br/>

<form method="POST" action="{{ url('/simpan-matkul') }}">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
		<label>Kode Mata kuliah<input type="text" name="kode_matkul"></label><br>
		<label>Nama Mata kuliah<input type="text" name="nama"></label><br>
		<label>Jumlah SKS<input type="text" name="jumlah_sks"></label><br>
		<label>Semester<input type="text" name="semester"></label><br>
		
		<input type="submit" name="btnSubmit">
</form>

<a href="{{ url('/list-matkul') }}">show matkuls</a><br>
<a href="{{ url('/tambah-kelas') }}">Tambah Kelas Paralel</a><br>
<a href="{{ url('/admin-inputperwalian') }}">Input Perwalian</a><br>

</body>
</html>