

<?php
// koneksi database
include '../koneksi.php';
session_start();


// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
  // menangkap data yang di kirim dari form
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $join_date = $_POST['join_date'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $id_department = $_POST['department'];
  $jabatan = $_POST['jabatan'];
  $alamat = $_POST['alamat'];
  $level = $_POST['level'];
  $password = $_POST['password'];
    // update user data
    $result2 = mysqli_query($koneksi, "DELETE from karyawan WHERE nik=$nik");

    // $result = mysqli_query($mysqli, "UPDATE karyawan SET nik='$nik',nama='$nama',jenis_kelamin='$jenis_kelamin',join_date='$join_date', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',id_department='$department', jabatan='$jabatan', alamat='$alamat', level='$level', password='$password' WHERE nik=$nik" );
    //$result = $koneksi->query("insert into absensi values('','$nik','$lokasi','$shift','$catatan','$nama_baru','$waktu','$status')") or die(mysqli_error($koneksi));

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}

//



// update data ke database
//mysqli_query($koneksi,"update karyawan set nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin',join_date='$join_date',tempat_lahir='$tempat_lahir',nama_department='$nama_department',jabatan='$jabatan',alamat='$alamat',level='$level',password='$password' where nik='$nik'");

// mengalihkan halaman kembali ke index.php
header("location:data_karyawan.php");

?>
