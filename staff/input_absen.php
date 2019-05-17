<?php

// koneksi database
// include '../koneksi.php';
// session
// //$nik = mysqli_real_escape_string($koneksi, $_GET['nik']);
//
// // menangkap data yang di kirim dari form
// $nik = $_POST['nik'];
// $nama_department = $_POST['nama_department'];
// $lokasi = $_POST['lokasi'];
// $shift = $_POST['shift'];
// $status = $_POST['status'];
// $waktu = $_POST['waktu'];
// $catatan = $_POST['catatan'];
// $foto = $_POST['foto'];
//
//
// // menginput data ke database
// //mysqli_query($koneksi,"insert into absensi values('','$nik','$nama_department','$lokasi','$shift','$catatan','$foto','$waktu','$status')")or die(mysqli_error($koneksi));;
// mysqli_query($koneksi,"INSERT INTO `absensi` (`id_absen`, `nik`, `id_department`, `id_lokasi`, `id_shift`, `alasan`, `foto_lokasi`, `waktu_absen`, `status`) VALUES ('', '$nik', '$nama_department', '$lokasi', '$shift', '$catatan', '$foto', '$waktu', '$status')")or die(mysqli_error($koneksi));;
//
// // mengalihkan halaman kembali ke index.php
// header("location:index.php");

require_once "../koneksi.php";
session_start();
$nik = $_SESSION['nik'];



// if(isset($_POST['update'])) {
//     $foto = $_POST['foto'];
// }



//$nama_department = $_SESSION['nama_department'];
$lokasi = $_POST['lokasi'];
//$nama_department = $_POST['nama_department'];
$shift = $_POST['shift'];
$status = $_POST['status'];
$waktu = $_POST['waktu'];
$catatan = $_POST['catatan'];
//$foto = $_POST['foto'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$ex = explode('.',$foto);
$nama_baru = 'foto_'.time().'.'.strtolower($ex[1]);

$daftar_extensi = ['jpg','png','jpeg'];
$extensi = strtolower(end($ex));



if (in_array($extensi,$daftar_extensi) === true) {
  $pindah = move_uploaded_file($tmp,'files/'.$nama_baru);
  $query = $koneksi->query("insert into absensi values('','$nik','$lokasi','$shift','$catatan','$nama_baru','$waktu','$status')") or die(mysqli_error($koneksi));
  header('location:index.php');
}else{
// echo "Type File Salah !!! <a href='index.php'> << Kembali</a>";
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Type file tidak diperbolehkan');
    window.location.href='index.php';
    </script>");


    }




?>
