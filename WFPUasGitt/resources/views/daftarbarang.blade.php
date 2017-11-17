<h1>Daftar Barang</h1>
<br>
	@foreach ($arrData as $kategori => $arrBarang)
	{{$kategori}} </br>

	@foreach ($arrBarang as $barang)
	{{ ($barang+1).'. '.$barang}} </br>

	@endforeach

	@endforeach

