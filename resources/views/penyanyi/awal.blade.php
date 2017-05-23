@extends('home')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Daftar PENYANYI</strong>
		<a href="{{url('penyanyi/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Penyanyi</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>id_penyanyi</th>
				<th>nama_penyanyi</th>
				<th>jenis_kelamin</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuapenyanyi as $penyanyi)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $penyanyi->nama_penyanyi or 'penyanyi kosong' }}</td>
				<td>{{ $penyanyi->jenis_kelamin or 'jenis kelamin kosong' }}</td>	
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('penyanyi/edit/'.$penyanyi->id_penyanyi)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('penyanyi/lihat/'.$penyanyi->id_penyanyi)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('penyanyi/hapus/'.$penyanyi->id_penyanyi)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@stop