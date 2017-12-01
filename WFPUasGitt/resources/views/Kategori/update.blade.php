<h1>Nama : {{ $kategori->nama }}<h1>
<h3>Deskripsi : {{ $kategori->deskripsi }}</h3>

@foreach ($errors->all() as $error)
<div style="background-color: red; font-weight: bold; color: white; margin-bottom: 2px">
	{{ $error }}
</div>
@endforeach	

<form method="post" action="{{ url('kategoris/'.$kategori->id)}}">
	<input type="hidden" name="_method" value="PUT"/>
	<input type="hidden" name="_token" value="{!! csrf_token()!!}"/> 
	<input type="text" name="nama" value="{{$kategori->nama}}" />
	<input type="deskripsi" name="deskripsi" value="{{$kategori->deskripsi}}"> 
	<input type="submit" value="Simpan" name="simpan"/>
</form>

@if(session('update'))
    <div class="alert alert-success">{{session('update')}}</div>
@endif
