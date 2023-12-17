<?php
include'../inc/config.php';
include'fpdf181/fpdf.php';
if (isset($_POST['tujuan'])){
$tujuan=$_POST['tujuan'];
$tgl_berangkat=$_POST['tgl_berangkat'];
$nama_petugas=$_POST['nama_petugas'];
}
$pdf = new FPDF();
$pdf->AddPage('P','A4');
$tgl=date('d F Y');

$pdf->Image('logo.jpg',10,12,20,22);
$pdf->Image('logo_kai.png',179,12,20,15);
$pdf->setFont('Arial','B',12);
$pdf->Cell(200,6,'PEMERINTAH PROVINSI JAWA TIMUR',0,1,'C');
$pdf->setFont('Arial','B',12);
$pdf->Cell(200,6,'DINAS PENDIDIKAN',0,1,'C');
$pdf->setFont('Arial','B',16);
$pdf->Cell(200,6,'SEKOLAH MENENGAH KEJURUAN NEGERI 4',0,1,'C');
$pdf->setFont('Arial','B',16);
$pdf->Cell(200,6,'BOJOEGORO',0,1,'C');
$pdf->setFont('Arial','B',8);
$pdf->Cell(200,6,'Jalan Raya Surabaya - Desa Sukowati, Kec. Kapas 62181. Telp./Fax. ( 0353 ) 892418',0,1,'C');
$pdf->setFont('Arial','B',7);
$pdf->Cell(200,6,'Web : www.smkn4bojonegoro.sch.id email : smkn4bojonegoro@yahoo.co.id',0,1,'C');
$pdf->setFont('Arial','B',10);
$pdf->Cell(200,6,'BOJONEGORO ',0,1,'C');
$pdf->SetLineWidth(0.3);
$pdf->Line(97,51,122,51);
$pdf->setFont('Arial','B',10);
$pdf->Cell(200,6,'LAPORAN PEMESANAN KERETA API',0,1,'C');
$pdf->Ln(1);		
$pdf->setFont('Arial','B',8);

$q=mysqli_query($conn,"SELECT pemesanan.tanggal_berangkat from pemesanan  WHERE  pemesanan.tanggal_berangkat='$tgl_berangkat'");
$r1=mysqli_fetch_array($q);
$pdf->Cell(10,6,'Tanggal Berangkat       :	'.$tgl_berangkat,0,0);
$pdf->Cell(10,6,'',0,1);

$pdf->SetFont('Arial','B',8);
$pdf->SetFillColor(192,192,192);
$pdf->Cell(10,8,'No',1,0,'C');
$pdf->Cell(40,8,'Nama Penumpang',1,0,'C');
$pdf->Cell(40,8,'Kota Keberangkatan',1,0,'C');
$pdf->Cell(40,8,'Tujuan',1,0,'C');
$pdf->Cell(40,8,'Type ',1,0,'C');
$pdf->Cell(10,8,'',0,1);

$nomor=0;
$q1=mysqli_query($conn,"SELECT penumpang.nama_penumpang,pemesanan.tanggal_berangkat,pemesanan.tujuan,transportasi.id_transportasi,type_transportasi.nama_type,rute.kota_awal FROM pemesanan INNER JOIN penumpang ON pemesanan.id_penumpang=penumpang.id_penumpang INNER JOIN rute ON pemesanan.id_rute=rute.id_rute INNER JOIN transportasi ON rute.id_transportasi=transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi=type_transportasi.id_type_transportasi WHERE pemesanan.tujuan='$tujuan' AND pemesanan.tanggal_berangkat='$tgl_berangkat'");
while($r=mysqli_fetch_array($q1)){
	$nomor++;
	$pdf->Ln(0);
	$pdf->setFont('Arial','',7);
	$pdf->Cell(10,8,$nomor,1,0);
	$pdf->Cell(40,8,$r['nama_penumpang'],1,0,'C');
	$pdf->Cell(40,8,$r['kota_awal'],1,0,'C');
	$pdf->Cell(40,8,$r['tujuan'],1,0,'C');
	$pdf->Cell(40,8,$r['nama_type'],1,0,'C');
	$pdf->Cell(10,8,'',0,1);
}
$pdf->Cell(10,8,'',0,1);
$pdf->Cell(10,8,'',0,1);
$sqlb=mysqli_query($conn,"SELECT * FROM petugas WHERE nama_petugas='$nama_petugas'");
$data2=mysqli_fetch_array($sqlb);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(185,8,'Mengetahui,',0,1,'C');
$pdf->Cell(185,8,'Bojonegoro, '.$tgl,0,1,'R');
$pdf->Cell(10,8,'',0,1);
$pdf->Cell(10,8,'Petugas,',0,0,'L');
$pdf->Cell(157,8,'Admin,',0,0,'R');
$pdf->Cell(10,8,'',0,1);
$pdf->Cell(10,8,'',0,1);
if ($data2['nama_petugas']==$nama_petugas){
$pdf->Cell(10,8,$data2['nama_petugas'],0,0,'L');
}


$pdf->Output('cetak_laporan_pemesanan.pdf','I');
?>			