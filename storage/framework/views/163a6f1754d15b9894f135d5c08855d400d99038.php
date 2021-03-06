<?php $__env->startSection('title','Tambah Data Siswa'); ?>

<?php $__env->startSection('content'); ?>

<h3><a href="/index" class="nav nav-link">Lihat Data</a></h3>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2>
			Tambah Data Siswa
		</h2>
	</div>
</div>

<form method="post" action="/index" autocomplete="off">
	<?php echo e(csrf_field()); ?>

	NIS : 
		<input type="text" name="nis" class="form-control" required="">
		<small class="form-text text-muted">NIS Wajib Diisi Sayang...</small>
	Nama : 
		<input type="text" name="nama" class="form-control">
	Rombel : <br>
		<select class="form-control" name="rombel">
			<option disabled selected>Silahkan Pilih...</option>
			<option>RPL XI-1</option>
			<option>RPL XI-2</option>
		</select>
	Rayon : <br>
		<select class="form-control" name="rayon">
			<option>Cisarua</option>
			<option>Cibedug</option>
		</select>
	Jenis Kelamin : <br>
		<select class="form-control" name="jk">
			<option value="pria">Pria</option>
			<option value="wanita">Wanita</option>
		</select>
	Alamat : 
		<textarea name="alamat" class="form-control" style="width: 50%"></textarea>
	No HP :
		<input type="text" name="no_hp" class="form-control">
	<br>
	<button class="btn btn-primary">Simpan</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\golaravel\resources\views/siswa/c_siswa.blade.php ENDPATH**/ ?>