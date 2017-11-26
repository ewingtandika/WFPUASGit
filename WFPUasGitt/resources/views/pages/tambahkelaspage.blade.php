<html>
<body>
<h1>Admin Control Panel</h1>
<br>
Tambahkan Kelas
<br/>

<form method="POST" action="{{ url('/simpan-kelas') }}">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
		<label>KP<input type="text" name="kp"></label><br>
		<label>Kapasitas<input type="text" name="kapasitas"></label><br>
		<label>matakuliah_id<input type="text" name="matakuliah_id"></label><br>
		<label>dosen_id<input type="text" name="dosen_id"></label><br>
		
		<input type="submit" name="btnSubmit">
</form>

<a href="{{ url('/adminpage') }}">Tambah matkul</a><br>
<a href="{{ url('/tambah-kelas') }}">Tambah Kelas Paralel</a><br>
<a href="{{ url('/admin-listkelas') }}">List Kelas</a><br>

</body>
</html>