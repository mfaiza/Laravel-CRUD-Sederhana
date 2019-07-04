<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{

    public function index()
    {
    	$data = Siswa::all();
    	return view('siswa.v_siswa', compact('data'));
    }

    public function show($id)
    {
    	$data = Siswa::find($id);
    	return view('siswa.d_siswa', compact('data'));
    }

    public function store(Request $req)
    {
    	$siswa = new Siswa;

    	$siswa->nis = $req->nis;
    	$siswa->nama = $req->nama;
    	$siswa->rombel = $req->rombel;
    	$siswa->rayon = $req->rayon;
    	$siswa->jk = $req->jk;
    	$siswa->alamat = $req->alamat;
    	$siswa->no_hp = $req->no_hp;

    	$siswa->save();

    	return redirect('/index');
    }

    public function create()
    {
    	return view('siswa.c_siswa');
    }

    public function edit($id)
    {
    	$data = Siswa::find($id);

    	return view('siswa.u_siswa', compact('data'));
    }

    public function update(Request $req, $id)	
    {
    	$siswa = Siswa::find($id);

    	$siswa->nis = $req->nis;
    	$siswa->nama = $req->nama;
    	$siswa->rombel = $req->rombel;
    	$siswa->rayon = $req->rayon;
    	$siswa->jk = $req->jk;
    	$siswa->alamat = $req->alamat;
    	$siswa->no_hp = $req->no_hp;

    	$siswa->save();

    	return redirect('/index');
    }

    public function destroy($id)
    {
    	$data = Siswa::find($id);
    	$data->delete();

    	return redirect('/index');
    }
}
