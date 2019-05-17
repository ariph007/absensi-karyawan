<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard  Absensi</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />



		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.min.js"></script>

		<script type="text/javascript" src="../admin/date_time.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

		<?php
		session_start();
		include"../koneksi.php";
		// cek apakah yang mengakses halaman ini sudah login
		if($_SESSION['level']=="" or $_SESSION['level']=="admin" ){
			header("location:index.php?pesan=gagal");
		}

		?>


	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.php" class="navbar-brand">
						<small>
							<i class="ace-icon fa fa-map-o"></i>
							Sistem Absensi Online(SAO) - PT XYZ
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li>
							<a href="logout.php">
								<i class="ace-icon fa fa-power-off"></i>
								Logout
							</a>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="active">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="history.php">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								History Absen
							</span>
						</a>

					<li class="">
						<a href="profile.php">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Profile </span>
						</a>

					<li class="">
						<a href="calendar.php">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								Calendar

								<span class="badge badge-transparent tooltip-error" title="See Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
						</a>

						<b class="arrow"></b>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="index.php">Dashboard</a>
							</li>

						</ul><!-- /.breadcrumb -->


					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									PT XYZ
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">

								<div class="widget-header widget-header-flat">
									<h4 class="widget-title lighter">
										<i class="ace-icon fa fa-star orange"></i>
									Absensi Hari Ini
									</h4>
								</div>
								<div align="center">
<span id="date_time" style="font-size: 24px"></span>
								<script type="text/javascript">window.onload = date_time('date_time');</script>
							</div>

							<?php

							// include database connection file
							include_once("../koneksi.php");


							// Check if form is submitted for user update, then redirect to homepage after update
							if(isset($_POST['update']))
							{
									$nik = $_POST['nik'];
										$foto = $_POST['foto'];
									$nama=$_POST['nama'];
									$jenis_kelamin=$_POST['jenis_kelamin'];
									$join_date=$_POST['join_date'];
									$tempat_lahir=$_POST['tempat_lahir'];
									$tanggal_lahir=$_POST['tanggal_lahir'];
									$nama_department=$_POST['nama_department'];
									$jabatan=$_POST['jabatan'];
									$alamat=$_POST['alamat'];
									$level=$_POST['level'];
									$password=$_POST['password'];

									// update user data
								//	$result = mysqli_query($koneksi, "UPDATE karyawan SET nik='$nik',nama='$nama',jenis_kelamin='$jenis_kelamin',join_date='$join_date', tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',nama_department='$nama_department',jabatan='$jabatan',alamat=$'$alamat',level='$level',password='$password' WHERE nik=$nik");

									// Redirect to homepage to display updated user in list
									header("Location: index.php");
							}

							?>
							<?php
							// Display selected user data based on id
							// Getting id from url
							$nik = $_SESSION['nik'];
							$waktu  = gmdate("Y-m-d H:i:s", time()+60*60*7);
							// Cek username di database

							// Fetech user data based on id
							$result = mysqli_query($koneksi, "SELECT * FROM karyawan LEFT JOIN department ON karyawan.id_department=department.id_department WHERE nik=$nik");
							//$result2 = mysqli_query($koneksi, "SELECT * FROM absensi");

							while($user_data = mysqli_fetch_array($result))
							{
									$nik = $user_data['nik'];
									$nama = $user_data['nama'];
									$jenis_kelamin = $user_data['jenis_kelamin'];
									$join_date = $user_data['join_date'];
									$tempat_lahir = $user_data['tempat_lahir'];
									$tanggal_lahir = $user_data['tanggal_lahir'];
									$nama_department = $user_data['nama_department'];
									$jabatan = $user_data['jabatan'];
									$alamat = $user_data['alamat'];
									$level = $user_data['level'];
									$password = $user_data['password'];


							}
							?>

							<form name="update" method="POST" action="input_absen.php"enctype="multipart/form-data">
									<table class="table" border="0" >
											<tr>
													<td>NIK</td>
													<td ><input class="col-xs-3" type="text" readonly="readonly" value="<?php echo $nik;?>"></td>
											</tr>
											<tr>
													<td>Nama</td>
													<td><input class="col-xs-3" type="text" readonly="readonly" name="nama" value="<?php echo $nama;?>"></td>
											</tr>
											<!-- <tr>
													<td>Department</td>
													<td><input type="text" disabled name="nama_department" value="<?php echo $nama_department;?>"></td>
											</tr> -->
											<tr>
													<td>Jabatan</td>
													<td><input class="col-xs-3" type="text" readonly="readonly" name="join_date" value="<?php echo $jabatan;?>"></td>
											</tr>
											<tr>
													<td>Shift</td>
													<td>
														<select name="shift" class="col-xs-3">
																<option value="1">Pagi</option>
																<option value="2">Sore</option>
														</select>
													</td>
											</tr>
											<tr>
													<td>Lokasi</td>
													<td>
														<select name="lokasi" class="col-xs-3">
																<option value="1">Branch Sukajadi</option>
																<option value="2">Branch Baloi</option>
																<option value="3">Branch Batam Center</option>
																<option value="4">Branch Batu Aji</option>
																<option value="5">Branch Tiban</option>
																<option value="6">Branch Batu Ampar</option>
														</select>
													</td>
											</tr>
											<tr>
													<td>Status</td>
													<td>
														<select name="status" class="col-xs-3">
																<option value="Masuk">Masuk</option>
																<option value="Pulang">Pulang</option>
																<option value="Keluar">Keluar</option>
														</select>
													</td>
											</tr>
											<tr>
													<td>Waktu</td>
													<td><input class="col-xs-3" type="text" readonly="readonly"  name="waktu" value="<?php echo $waktu;?>"></td>
											</tr>
											<tr>
												 <td>Catatan</td>
												 <td>
													 <!-- <input class="col-xs-3" type="text" name="catatan" value=""> -->
													 <textarea class="col-xs-3" type="text" name="catatan" value=""></textarea>
												 </td>
										 </tr>
										 <tr>
												 <td>Foto</td>
												 <td><input type="file" name="foto" value=""></td>
										 </tr>
											<tr>

													<td>
														<button class="btn" name="update">
															<i class="ace-icon fa fa-pencil align-top bigger-125"></i>
															Absen
														</button>
														<!-- <input type="submit" name="update" value="Absen"> -->
													</td>
											</tr>
									</table>
							</form>

							</div><!-- /.span -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">SOA</span>
							Application &copy; 2019
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="../assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="../assets/js/jquery.dataTables.min.js"></script>
		<script src="../assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="../assets/js/dataTables.buttons.min.js"></script>
		<script src="../assets/js/buttons.flash.min.js"></script>
		<script src="../assets/js/buttons.html5.min.js"></script>
		<script src="../assets/js/buttons.print.min.js"></script>
		<script src="../assets/js/buttons.colVis.min.js"></script>
		<script src="../assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

	</body>
</html>
