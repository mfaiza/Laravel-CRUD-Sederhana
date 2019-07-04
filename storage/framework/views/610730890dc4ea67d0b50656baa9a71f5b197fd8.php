<?php $__env->startSection('title','Update Data Siswa'); ?>

<?php $__env->startSection('content'); ?>

<h3><a href="/index" class="nav nav-link">Lihat Data</a></h3>

<form method="post" action="/index/<?php echo e($data->id); ?>">
	<?php echo csrf_field(); ?>
	<?php echo method_field('PUT'); ?>
	NIS : 
		<input type="text" name="nis" class="form-control" required="" value="<?php echo e($data->nis); ?>">
	Nama : 
		<input type="text" name="nama" class="form-control" value="<?php echo e($data->nama); ?>">
	Rombel : <br>
		<select class="form-control" name="rombel" >
			<option selected><?php echo e($data->rombel); ?></option>
			<option>RPL XI-1</option>
			<option>RPL XI-2</option>
		</select>
	Rayon : <br>
		<select class="form-control" name="rayon">
			<option selected><?php echo e($data->rayon); ?></option>
			<option>Cisarua</option>
			<option>Cibedug</option>
		</select>
	Jenis Kelamin : <br>
		<select class="form-control" name="jk">
			<option selected ><?php echo e($data->jk); ?></option>
			<option value="pria">Pria</option>
			<option value="wanita">Wanita</option>
		</select>
	Alamat : 
		<textarea name="alamat" class="form-control" style="width: 50%" ><?php echo e($data->alamat); ?></textarea>
	No HP :
		<input type="text" name="no_hp" class="form-control" value="<?php echo e($data->no_hp); ?>">
	<br>
	<button class="btn btn-warning">Update</button>
	<button class="btn btn-secondary">
		<a href="/index">Batal</a>
	</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\golaravel\resources\views/siswa/u_siswa.blade.php ENDPATH**/ ?>