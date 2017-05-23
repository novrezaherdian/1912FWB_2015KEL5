@extends('home')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Daftar Lagu</strong>
		<a href="{{url('lagu/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Lagu</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>id lagu</th>
				<th>judul</th>
				<th>tahun_realese</th>
				<th>id_bahasa</th>
				<th>id_gendre</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaLagu as $lagu)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $lagu->judul or 'nama kosong' }}</td>
				<td>{{ $lagu->tahun_release or 'tahun release kosong' }}</td>	
				<td>{{ $lagu->id_bahasa or 'bahasa kosong' }}</td>
				<td>{{ $lagu->id_gendre or 'gendre kosong' }}</td>			
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('lagu/edit/'.$lagu->id_lagu)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('lagu/lihat/'.$lagu->id_lagu)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('lagu/hapus/'.$lagu->id_lagu)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@stop