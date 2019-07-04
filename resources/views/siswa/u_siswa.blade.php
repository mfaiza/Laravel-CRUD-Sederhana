@extends('layouts.master')

@section('title','Update Data Siswa')

@section('content')

<h3><a href="/index" class="nav nav-link">Lihat Data</a></h3>

<form method="post" action="/index/{{$data->id}}">
	@csrf
	@method('PUT')
	NIS : 
		<input type="text" name="nis" class="form-control" required="" value="{{$data->nis}}">
	Nama : 
		<input type="text" name="nama" class="form-control" value="{{$data->nama}}">
	Rombel : <br>
		<select class="form-control" name="rombel" >
			<option selected>{{$data->rombel}}</option>
			<option>RPL XI-1</option>
			<option>RPL XI-2</option>
		</select>
	Rayon : <br>
		<select class="form-control" name="rayon">
			<option selected>{{$data->rayon}}</option>
			<option>Cisarua</option>
			<option>Cibedug</option>
		</select>
	Jenis Kelamin : <br>
		<select class="form-control" name="jk">
			<option selected >{{$data->jk}}</option>
			<option value="pria">Pria</option>
			<option value="wanita">Wanita</option>
		</select>
	Alamat : 
		<textarea name="alamat" class="form-control" style="width: 50%" >{{$data->alamat}}</textarea>
	No HP :
		<input type="text" name="no_hp" class="form-control" value="{{$data->no_hp}}">
	<br>
	<button class="btn btn-warning">Update</button>
	<button class="btn btn-secondary">
		<a href="/index">Batal</a>
	</button>
</form>
@endsection