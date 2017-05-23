@extends('home')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('lagu') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Lagu</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td>{{ $lagu->judul }}</td>
		</tr>
		<tr>
			<td>Lagu</td>
			<td>:</td>
			<td>{{ $lagu->tahun_release }}</td>
		</tr>
		<tr>
			<td>id bahasa</td>
			<td>:</td>
			<td>{{ $lagu->id_bahasa }}</td>
		</tr>
		<tr>
			<td>id gendre</td>
			<td>:</td>
			<td>{{ $lagu->id_gendre }}</td>
		</tr>

	</table>
</div>
@stop
