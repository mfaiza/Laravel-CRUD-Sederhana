@extends('layouts.master')
@section('title','Form Siswa')
@section('content')

<h2>Data Siswa SMK Tugu Utara 02</h2>
<a href="/addSiswa" class="">Tambah Data Siswa</a>
<form method="post" action="/index">
	@csrf
	<table class="table table-bordered">
		<tr>
			<td>No</td>
			<td>NIS</td>
			<td>Nama</td>
			<td>Rombel</td>
			<td>Rayon</td>
			<td>Jenis Kelamin</td>
			<td>Alamat</td>
			<td>No HP</td>
			<td colspan="2">Action</td>
		</tr>
		<?php $no=1; ?>
			@foreach($data as $data)
		<tr>
				<td>{{$no++}}</td>
				<td>{{$data->nis}}</td>
				<td>{{$data->nama}}</td>
				<td>{{$data->rombel}}</td>
				<td>{{$data->rayon}}</td>
				<td>{{$data->jk}}</td>
				<td>{{$data->alamat}}</td>
				<td>{{$data->no_hp}}</td>
				<td>
					<a href="/index/show/{{$data->id}}" class="btn btn-primary">Lihat Data</a>
					<a href="/index/edit/{{$data->id}}" class="btn btn-warning">Edit</a>
					<form action="/index/{{$data->id}}">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger">Hapus</button>
					</form>
				</td>
			@endforeach
		</tr>
	</table>
</form>

@endsection