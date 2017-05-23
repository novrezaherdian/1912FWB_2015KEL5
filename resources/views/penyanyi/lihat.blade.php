@extends('home')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('penyanyi') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Penyanyi</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Penyanyi</td>
			<td>:</td>
			<td>{{ $penyanyi>nama_penyanyi }}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{ $penyanyi->jenis_kelamin }}</td>
		</tr>

	</table>
</div>
@stop
