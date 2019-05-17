<?php
session_start();
		include '../koneksi.php';

			$title_file = $_POST['title_file'];
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			  $acak           = rand(1,99);
			  $nama_file_unik = $acak.$nama;

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
			{
				if($ukuran < 1044070)
				{
					move_uploaded_file($file_tmp, '../file/'.$nama_file_unik);
					$query = "insert INTO absensi SET
													foto = '$nama_file_unik',
													";

					mysqli_query($koneksi, $query)
					or die ("Gagal Perintah SQL".mysql_error());
					if($query){
									$_SESSION['pesan'] = 'Foto berhasil di simpan';
									header('location:index.php');
								}
								else
								{
									$_SESSION['pesan'] = 'Gagal Upload Gambar';
									header('location:form.php');
								}
				}
				else
				{
					$_SESSION['pesan'] = 'Ukuran file terlalu besar';
					header('location:form.php');
				}
			}
			else
			{
				$_SESSION['pesan'] = 'Ekstensi file tidak di perbolehkan';
				header('location:form.php');
			}
		?>
