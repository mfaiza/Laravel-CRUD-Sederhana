<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $__env->yieldContent('title'); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
	</head>
	<body>
		<header>
			<ul class="nav justify-content-end navbar navbar-dark bg-dark">
			  <li class="nav-item">
			    <a class="nav-link" href="/index">Home</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">About</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Contact</a>
			  </li>
			</ul>
		</header>

		<br>
		<?php echo $__env->yieldContent('content'); ?>
		<br>

		<footer>
			<div class="card">
			  <div class="card-footer">
			    Contact
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">Sakura no Hana Technology</h5>
			    <p class="card-text">Jalan Labuan-Cianjur No.893</p>
			    <a href="#" class="fa fa-facebook-official"></a>
			  </div>
			</div>
		</footer>
	</body>
</html><?php /**PATH C:\xampp\htdocs\golaravel\resources\views/layouts/master.blade.php ENDPATH**/ ?>