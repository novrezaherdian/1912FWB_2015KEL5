@extends('home')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Daftar Album</strong>
		<a href="{{url('album/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Album</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>id_album</th>
				<th>nama_album</th>
				<th>urutan_lagu</th>
				<th>id_rekaman</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaalbum as $album)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $album->nama_album or 'album kosong' }}</td>
				<td>{{ $album->urutan_lagu or 'urutan lagu kosong' }}</td>	
				<td>{{ $album->id_rekaman or 'rekaman kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('album/edit/'.$album->id_album)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('album/lihat/'.$album->id_album)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('album/hapus/'.$album->id_album)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@stop