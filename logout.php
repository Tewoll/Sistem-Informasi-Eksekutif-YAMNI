<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Eksekutif YAMNI</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
	body {
            background: #778899;
            background: url(dist/img/background.jpg);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
        }
	</style>
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
	<div class="card card-info card-outline">
		<div class="card-header text-center">
		  <a href="index.php"><b>Sistem Informasi Eksekutif</b><br>YAMNI</a>
		</div>
		<div class="card-body bg-light">
			<div class="ribbon-wrapper ribbon-lg">
				<div class="ribbon bg-info">TewollArt</div>
			</div>
			<p class="login-box-msg">
			<?php
				session_start();
				if(isset($_POST['logout_btn'])){
					unset($sesi);
					session_destroy();
					ob_start(); $sukses_msg = "Berhasil keluar dari sistem, silakan tunggu beberapa saat"; echo $sukses_msg; echo '<meta http-equiv="refresh" content="3;url=login.php">'; ob_end_flush();
				}else{
				ob_start(); $gagal_msg = "Gagal melakukan proses keluar dari sistem, silakan tunggu beberapa saat"; echo $gagal_msg; echo '<meta http-equiv="refresh" content="3;url=index.php">'; ob_end_flush();
				}
				?>
			</p>
		</div>
	</div>
</div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
