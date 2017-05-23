@extends('home')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('gendre') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Gendre</strong>		
	</div>
	<table class="table">
		<tr>
			<td>ID Gendre</td>
			<td>:</td>
			<td>{{ $gendre->id_gendre }}</td>
		</tr>
		<tr>
			<td>Gendre</td>
			<td>:</td>
			<td>{{ $gendre->gendre }}</td>
		</tr>
		
	</table>
</div>
@stop
