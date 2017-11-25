@if(session('status'))
	<div style="background-color: green; color: white;">
		{{ session('status') }}
	</div>
@endif

<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th></th>
	</tr>

	@foreach ($kategoris as $key => $kategori)
	<tr>
		<td>{{ ($key+1) }}</td>
		<td>{{ $kategori->nama }}</td>
		<td> <a href="{{ url('kategoris/'.$kategori->id) }}">[Show]</a></td>
		<td> <a href="{{ url('kategoris/'.$kategori->id.'/edit')}}">[Edit]</a></td>
		<td>
			<form action="{{ url('kategoris/'.$kategori->id) }}" method="post">
                <input type="hidden" name="_method" value="delete" />
                <button class="btn btn-default" type="submit">Delete</button>
                {!! csrf_field() !!}
            </form>
		</td>
	</tr>


	@endforeach
</table>