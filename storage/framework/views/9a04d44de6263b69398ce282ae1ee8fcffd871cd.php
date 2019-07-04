<?php $__env->startSection('title','Form Siswa'); ?>
<?php $__env->startSection('content'); ?>

<h2>Data Siswa SMK Tugu Utara 02</h2>
<a href="/addSiswa" class="">Tambah Data Siswa</a>
<form method="post" action="/index">
	<?php echo csrf_field(); ?>
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
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($data->nis); ?></td>
				<td><?php echo e($data->nama); ?></td>
				<td><?php echo e($data->rombel); ?></td>
				<td><?php echo e($data->rayon); ?></td>
				<td><?php echo e($data->jk); ?></td>
				<td><?php echo e($data->alamat); ?></td>
				<td><?php echo e($data->no_hp); ?></td>
				<td>
					<a href="/index/show/<?php echo e($data->id); ?>" class="btn btn-primary">Lihat Data</a>
					<a href="/index/edit/<?php echo e($data->id); ?>" class="btn btn-warning">Edit</a>
					<form action="/index/<?php echo e($data->id); ?>">
						<?php echo csrf_field(); ?>
						<?php echo method_field('DELETE'); ?>
						<button class="btn btn-danger">Hapus</button>
					</form>
				</td>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tr>
	</table>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\golaravel\resources\views/siswa/v_siswa.blade.php ENDPATH**/ ?>