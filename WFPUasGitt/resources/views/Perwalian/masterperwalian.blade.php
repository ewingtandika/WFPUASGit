@extends('layouts.menumahasiswa')

@section('content')
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Perwalian</h1>
			<hr style="height: 0.1px; border: solid; background-color: black;">
		</div>
		<!-- /.col-lg-12 -->
	</div>
		<h3>Status : {{$perwalian->nama .': '. $perwalian->status}}</h3>
		<form action="{{url('/update-perwalian')}}" method="POST">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
			<input type="submit" value="{{$wrd}}"></input>
		</form>

		<table border=1>
		<tr><td>id</td><td>nama</td><td>tanggal_mulai</td><td>tanggal_selesai</td><td>status</td>
		@if(count($listperwalians)>0)
		@foreach($listperwalians as $perwalians)

			<tr>
			<td>{{$perwalians->id}}</td>
			<td>{{$perwalians->nama}}</td>
			<td>{{$perwalians->tanggal_mulai}}</td>
			<td>{{$perwalians->tanggal_selesai}}</td>
			<td>{{$perwalians->status}}</td>
			<td></td>
			<td><a href='{{ url("/delete-perwalian/{$perwalians->id}") }}'>hapus</a></td>
			</tr>
		@endforeach
		@endif
	@endsection
