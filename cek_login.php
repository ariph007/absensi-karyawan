<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$nik = $_POST['nik'];
$password = $_POST['password'];


// menyeleksi data user dengan nik dan password yang sesuai
$login = mysqli_query($koneksi,"select * from karyawan where nik='$nik' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah nik dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan nik
		$_SESSION['nik'] = $nik;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:/sak/admin/index.php");

	// cek jika user login sebagai staff
	}else if($data['level']=="staff"){
		// buat session login dan nik
		$_SESSION['nik'] = $nik;
		$_SESSION['level'] = "staff";
		// alihkan ke halaman dashboard staff
		header("location:/sak/staff/index.php");

	// // cek jika user login sebagai pengurus
	// }else if($data['level']=="pengurus"){
	// 	// buat session login dan nik
	// 	$_SESSION['nik'] = $nik;
	// 	$_SESSION['level'] = "pengurus";
	// 	// alihkan ke halaman dashboard pengurus
	// 	header("location:halaman_pengurus.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}
}else{
	header("location:index.php?pesan=gagal");
}

?>
