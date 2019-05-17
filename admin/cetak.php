<?php
include"../koneksi.php";
require('../assets/fpdf/fpdf.php');
// Ukuran kertas PDF
$pdf = new FPDF('l','cm','A4');

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage('L');
$pdf->SetFont('Times','B',11);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Absensi PT XYZ",0,10,'C');

$pdf->SetFont('Times','B',11);
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
//Format tanggal
$pdf->Cell(5,0.7,"Printed On : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
// st font yang ingin anda gunakan
$pdf->SetFont('Arial','B',10);
// queri yang ingin di tampilkan di tabel sehingga ketika diubah tidak akan berpengaruh
// Kode 1, 0, 'C' dan banyak kode di bawah adalah ukuran lebar tabel ubah jika tidak sesuai keinginan anda.
$pdf->Cell(2, 0.8, 'NIK', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Nama', 1, 0, 'L');
$pdf->Cell(3, 0.8, 'Department', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Status', 1, 0, 'C');
$pdf->Cell(3.5, 0.8, 'Lokasi', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Shift', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Waktu Absen', 1, 1, 'C');
// $pdf->Cell(4, 0.8, 'Catatan', 1, 0, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
// from dan edn ini adalah nama dari form star_filter.php yang berfungsi untuk memanggil tanggal yang di atur
$tgl=$_POST['tanggal'];
$tgl2=$_POST['tanggal2'];
// memanggil database
$query=mysqli_query($koneksi,"SELECT karyawan.nik, karyawan.nama, department.nama_department, absensi.status,lokasi.nama_lokasi,shift.nama_shift,absensi.waktu_absen as waktu_absen,absensi.alasan,absensi.foto_lokasi FROM `absensi` LEFT JOIN karyawan ON absensi.nik=karyawan.nik LEFT JOIN department ON department.id_department=karyawan.id_department LEFT JOIN lokasi ON lokasi.id_lokasi=absensi.id_lokasi LEFT JOIN shift ON shift.id_shift=absensi.id_shift where waktu_absen between '$tgl' and '$tgl2 23:59:59' ORDER BY waktu_absen");
while($lihat=mysqli_fetch_array($query)){

// Queri yang ingin ditampilkan yang berada di database
 $pdf->Cell(2, 0.8, $lihat['nik'], 1, 0, 'C');
 $pdf->Cell(6, 0.8, $lihat['nama'], 1, 0,'L');
 $pdf->Cell(3, 0.8, $lihat['nama_department'], 1, 0,'C');
 $pdf->Cell(2, 0.8, $lihat['status'],1, 0, 'C');
 $pdf->Cell(3.5, 0.8, $lihat['nama_lokasi'],1, 0, 'C');
 $pdf->Cell(2, 0.8, $lihat['nama_shift'], 1, 0,'C');
 $pdf->Cell(5, 0.8, $lihat['waktu_absen'],1, 1, 'C');
 // $pdf->Cell(4, 0.8, $lihat['alasan'], 1, 1,'C');
 $no++;
}
$pdf->ln(1);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(40.5,0.7,"Approve",0,10,'C');

$pdf->ln(1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(40.5,0.7,"Human Resources Department",0,10,'C');
// Nama file ketika di print
$pdf->Output("laporan_absensi.pdf","I");

?>
