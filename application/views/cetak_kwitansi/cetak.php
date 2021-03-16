<!DOCTYPE html>
<html><head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head><style>
	table{
    border-collapse:collapse;
    font:normal normal 12px Verdana,Arial,Sans-Serif;
    color:#333333;
}
/* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */
table th {
    background:#00BFFF;
    color:black;
    font-weight:bold;
    font-size:14px;
}
/* Mengatur border dan jarak/ruang pada kolom */
table th,
table td {
    vertical-align:top;
    padding:5px 10px;
    border:1px solid #696969;
}
/* Mengatur warna baris */
table tr {
    background:#F5FFFA;
}
/* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
table tr:nth-child(even) {
    background:#F0F8FF;
}
</style><body>

	<?php foreach ($cetak as $data) {
		
	} ?>


		<img src="asets/img/kwitansi.png" style='height: 320px; position: absolute; bottom: 50px; left:120 px; top:30px;'>
		<p style="position: absolute; top: 67px; left: 298px;"><?= $data['no_kwitansi'] ?></p>

		<p id="terima" style="position: absolute; top: 107px; left: 396px; font-weight: bold; font-family:courier"><?= $data['pesanan'] ?></p>

		<div class="terbilang" style="position: absolute; top: 100px; left: 400px; width: 450px; font-style: italic;">
		<p id="terbilang" style=" font-family:courier; margin-top: 15px; line-height: 1.8"><?= $data['terbilang'] ?> Rupiah.</p>
		</div>

		<div class="untuk_pembayaran" style="position: absolute; top: 147px; left: 270px; width: 580px;">
		<p id="terbilang" style=" font-family:courier; margin-top: 15px; line-height: 1.5; text-indent: 130px; font-weight: bold;"><?= $data['untuk_pembayaran'] ?></p>
		</div>

		<p class="harga" style="position: absolute; top: 244px; left: 643px; font-family: courier; font-weight: bold;">Medan, <?= date('d-m-Y') ?></p>

		<?php 
		$angka = $data['nilai_pesanan'];

		 ?>



		<p class="harga" style="position: absolute; top: 280px; left: 380px; font-family: courier; font-weight: bold;"><?= number_format($angka,0,',','.'); ?>,-</p>

		<!-- <h3 style="text-align: center; margin-bottom: 60px;">LAPORAN DATA </h3>
			<h3 style="text-align: center;">PT.EBUNGA SUSKSES MAKMUR</h3>
			<p style="text-align: center;font-style: italic;"><strong>Jl.Cemara No.15 Medan Estate, Kabupaten Deliserdang, Sumatera Utara</strong></p>
			<hr style="border: 3px solid;">
		<br><br><br> -->

	
		
	
	<div class="" style="position: absolute; top :100%">
		<hr class="" style="border: 1px solid; color: black;" > 
		<small style="font-style: italic;">	<?= $footer; ?>  <?= $data['no_kwitansi'] ?>, Dicetak Pada Tanggal <?= date('m-d-Y'); ?> </small><br>
		<small style="font-style: italic;">Belanja Mudah dan Murah Hanya Diebunga</small>

	</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body></html>