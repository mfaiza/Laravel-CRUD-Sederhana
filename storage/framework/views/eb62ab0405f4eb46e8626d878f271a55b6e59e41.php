<?php $__env->startSection('title','Detail Siswa'); ?>

<?php $__env->startSection('content'); ?>
	<h2>Detail Siswa SMK Tugu Utara 02</h2>
	<br>
	<h3>
		<?php echo e($data->nama); ?>

	</h3>
	<br>
	<ul><h4>
		NIS : 
		<input type="text" name="nis" value="<?php echo e($data->nis); ?>" disabled class="form-control">
		Nama : 
		<input type="text" name="nama" class="form-control" value="<?php echo e($data->nama); ?>" disabled>
		Rombel : 
		<input type="text" name="rombel" class="form-control" value="<?php echo e($data->rombel); ?>" disabled>
		Rayon : 
		<input type="text" name="rayon" class="form-control" value="<?php echo e($data->rayon); ?>" disabled>
		Jenis Kelamin : 
		<input type="text" name="jk" class="form-control" value="<?php echo e($data->jk); ?>" disabled>
		Alamat : 
		<input type="text" name="alamat" class="form-control" value="<?php echo e($data->alamat); ?>" disabled>
		No HP : 
		<input type="text" name="no_hp" class="form-control" value="<?php echo e($data->no_hp); ?>" disabled>
	</h4></ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\golaravel\resources\views/siswa/d_siswa.blade.php ENDPATH**/ ?>