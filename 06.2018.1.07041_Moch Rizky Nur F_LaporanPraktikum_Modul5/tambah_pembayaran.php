<?php
include 'connect.php';
?>
<h1>Tambah Pembayaran</h1>
<form method=POST>
<table>	
<tr><td>ID Pembayaran</td><td><input type=number name='id_pembayaran'></td></tr>
<tr><td>ID NIK</td><td><input type=number name='id_nik'></td></tr>
<tr><td>Harga Total</td><td><input type=number name='harga_total'></td></tr>
<tr><td>Jumlah Tiket</td><td><input type=number name='jumlah_tiket'></td></tr>
<tr><td rowspan='2'><input type=submit name='submit'></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){

	$id_pembayaran = $_POST['id_pembayaran'];
	$id_nik = $_POST['id_nik'];
	$harga_total = $_POST['harga_total'];
	$jumlah_tiket = $_POST['jumlah_tiket'];
	$q = "insert into pembayaran values(".$id_pembayaran.",".$id_nik.",".$harga_total.",".$jumlah_tiket.")";
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
}
?>
<a href="pembayaran.php">Kembali</a>


