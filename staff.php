<!DOCTYPE html>
<html>
<head>
	<title>Halaman staff - PT. XYZ Company</title>
</head>
<body>
	<?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']=="" or $_SESSION['level']=="admin"){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman staff</h1>

	<p>Halo <b><?php echo $_SESSION['nik']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>

	<a><a href="https://www.malasngoding.com/membuat-login-multi-user-level-dengan-php-dan-mysqli">Membuat Login Multi Level Dengan PHP</a> - www.malasngoding.com</a>
</body>
</html>
