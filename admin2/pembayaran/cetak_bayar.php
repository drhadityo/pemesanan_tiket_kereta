<?php
include'../inc/config.php';
include'fpdf181/fpdf.php';
if (isset($_GET['id_pemesanan'])){
$id=$_GET['id_pemesanan'];
}


$pdf = new FPDF();
$pdf->AddPage('P','legal');
$tgl=date('d F Y');

$pdf->Image('logo.jpg',10,12,20,22);
$pdf->Image('logo_kai.png',179,12,20,15);
$pdf->setFont('Arial','B',12);
$pdf->Cell(200,6,'PEMERINTAH PROVINSI JAWA TIMUR',0,1,'C');
$pdf->setFont('Arial','B',12);
$pdf->Cell(200,6,'DINAS PERHUBUNGAN',0,1,'C');
$pdf->setFont('Arial','B',16);
$pdf->Cell(200,6,'PT KERETA API INDONESIA',0,1,'C');
$pdf->setFont('Arial','B',16);
$pdf->Cell(200,6,'BOJOEGORO',0,1,'C');
$pdf->setFont('Arial','B',8);
$pdf->Cell(200,6,'Jalan Gajah Mada 65/Raya Babat-Bojonegoro Sukorejo, Bojonegoro, Bojonegoro, Jawa Timur 62115',0,1,'C');
$pdf->setFont('Arial','B',7);
$pdf->Cell(200,6,'Web : www.kai.id email :  dokumen.do1@kai.id',0,1,'C');
$pdf->setFont('Arial','B',10);
$pdf->Cell(200,6,'BOJONEGORO ',0,1,'C');
$pdf->SetLineWidth(0.3);
$pdf->Line(97,51,122,51);
$pdf->setFont('Arial','B',10);
$pdf->Cell(200,6,'TIKET PEMESANAN KERETA API',0,1,'C');
$pdf->Ln(1);		
$pdf->setFont('Arial','B',8);
$q=mysqli_query($conn,"SELECT penumpang.nama_penumpang,penumpang.alamat_penumpang,pemesanan.id_pemesanan,pemesanan.kode_pemesanan,pemesanan.tujuan from pemesanan INNER JOIN penumpang on pemesanan.id_penumpang=penumpang.id_penumpang where pemesanan.id_pemesanan='$id'");
$r1=mysqli_fetch_array($q);
$pdf->Cell(10,6,'Id Pemesanan            :	'.$r1['id_pemesanan'],0,0);
$pdf->Cell(10,6,'',0,1);
$pdf->Cell(10,6,'Nama                           :	'.$r1['nama_penumpang'],0,0);
$pdf->Cell(10,6,'',0,1);
$pdf->Cell(10,6,'Alamat                         :	'.$r1['alamat_penumpang'],0,0);
$pdf->Cell(10,6,'',0,1);
$pdf->Cell(10,6,'Kode pemesanan       :	'.$r1['kode_pemesanan'],0,0);
$pdf->Cell(10,6,'',0,1);
$pdf->Cell(10,6,'Tujuan                         :	'.$r1['tujuan'],0,0);
$pdf->Cell(10,6,'',0,1);

$pdf->SetFont('Arial','B',8);
$pdf->SetFillColor(192,192,192);
$pdf->Cell(10,8,'No',1,0,'C');
$pdf->Cell(80,8,'Nama Penumpang',1,0,'C');
$pdf->Cell(80,8,'Alamat',1,0,'C');
$pdf->Cell(20,8,'Kode Kursi',1,0,'C');
$pdf->Cell(10,8,'',0,1);
$nomor=0;
$q1=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,detail_penumpang.nama_penumpang,detail_penumpang.alamat,detail_penumpang.kode_kursi FROM pemesanan INNER join detail_penumpang ON detail_penumpang.id_pemesanan=pemesanan.id_pemesanan where pemesanan.id_pemesanan='$id'");
while($r=mysqli_fetch_array($q1)){
	$nomor++;
	$pdf->Ln(0);
	$pdf->setFont('Arial','',7);
	$pdf->Cell(10,8,$nomor,1,0);
	$pdf->Cell(80,8,$r['nama_penumpang'],1,0,'C');
	$pdf->Cell(80,8,$r['alamat'],1,0,'C');
	$pdf->Cell(20,8,$r['kode_kursi'],1,0,'C');
	$pdf->Cell(10,8,'',0,1);
}


$pdf->Output('cetak_bayar.pdf','I');
?>			