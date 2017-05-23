@extends('home')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong></a> Detail Data Album</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Album</td>
			<td>:</td>
			<td>{{ $album->nama_album }}</td>
		</tr>
		<tr>
			<td>Urutan Lagu</td>
			<td>:</td>
			<td>{{ $album->urutan_lagu }}</td>
		</tr>
		<tr>
			<td>id rekaman</td>
			<td>:</td>
			<td>{{ $album->id_rekaman }}</td>
		</tr>

	</table>
</div>
@stop
