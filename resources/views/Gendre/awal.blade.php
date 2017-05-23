@extends('home')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Daftar Gendre</strong>
		<a href="{{url('gendre/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Gendre</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>id gendre</th>
				<th>gendre</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuagendre as $gendre)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $gendre->gendre or 'gendre kosong' }}</td>	
						
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('gendre/edit/'.$gendre->id_gendre)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('gendre/lihat/'.$gendre->id_gendre)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('gendre/hapus/'.$gendre->id_gendre)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@stop