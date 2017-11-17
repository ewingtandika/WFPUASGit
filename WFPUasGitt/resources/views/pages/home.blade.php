<h1>Daftar Kategori</h1>
<br/>
@foreach ($datakategoris as $kategori)
		{{ $kategori->nama.':'.$kategori->deskripsi }}
<br/>
@endforeach