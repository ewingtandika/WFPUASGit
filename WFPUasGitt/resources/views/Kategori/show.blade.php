<h1>Show Kategori</h1>
<table>
	<tr>
		<td>Nama : </td><td>{{ $kategori->nama }}</td>
	</tr>
	<tr>
		<td>Deskripsi : </td><td>{{ $kategori->deskripsi }}</td>
	</tr>
</table>
<a href="{{ url('kategoris') }}">[Kembali]</a>