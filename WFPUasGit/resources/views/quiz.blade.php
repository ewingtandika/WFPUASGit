<h1>Daftar Sint_Mollitia</h1>
<br>
	@foreach ($kuis as $key => $value)
	{{$value->id}}. voluptates_nihil : {{$value->voluptates_nihil}}, consequuntur : {{$value->consequuntur}}, user_id : {{$value->user_id}} </br><br>

	@endforeach
