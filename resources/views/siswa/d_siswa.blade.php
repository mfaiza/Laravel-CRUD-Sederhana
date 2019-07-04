@extends('layouts.master')
@section('title','Detail Siswa')

@section('content')
	<h2>Detail Siswa SMK Tugu Utara 02</h2>
	<br>
	<h3>
		{{$data->nama}}
	</h3>
	<br>
	<ul><h4>
		NIS : 
		<input type="text" name="nis" value="{{$data->nis}}" disabled class="form-control">
		Nama : 
		<input type="text" name="nama" class="form-control" value="{{$data->nama}}" disabled>
		Rombel : 
		<input type="text" name="rombel" class="form-control" value="{{$data->rombel}}" disabled>
		Rayon : 
		<input type="text" name="rayon" class="form-control" value="{{$data->rayon}}" disabled>
		Jenis Kelamin : 
		<input type="text" name="jk" class="form-control" value="{{$data->jk}}" disabled>
		Alamat : 
		<input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" disabled>
		No HP : 
		<input type="text" name="no_hp" class="form-control" value="{{$data->no_hp}}" disabled>
	</h4></ul>
@endsection