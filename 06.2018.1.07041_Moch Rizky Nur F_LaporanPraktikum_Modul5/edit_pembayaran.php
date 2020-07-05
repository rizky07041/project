<?php
include 'connect.php';
$q = "select * from pembayaran where id_pembayaran='".$_GET['id']."'";
$parsesql = oci_parse($conn, $q);
oci_execute($parsesql);
$rows=oci_fetch_object($parsesql);
?>
<h1>Edit Pembayaran</h1>
<form method=POST>
<table>
<tr><td>ID Pembayaran</td><td><input type=text name='id_pembayaran' value='<?php echo $rows->ID_PEMBAYARAN; ?>'</td></tr>
<tr><td>ID NIK</td><td><input type=text name='id_nik' value='<?php echo $rows->ID_NIK; ?>'></td></tr>
<tr><td>Harga Total</td><td><input type=text name='harga_total' value='<?php echo $rows->HARGA_TOTAL; ?>'></td></tr>
<tr><td>Jumlah Tiket</td><td><input type=text name='jumlah_tiket' value='<?php echo $rows->JUMLAH_TIKET; ?>'></td></tr>
<tr><td rowspan='2'><input type=submit name='submit'></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){

	$id_pembayaran = $_POST['id_pembayaran'];
	$id_nik = $_POST['id_nik'];
	$harga_total = $_POST['harga_total'];
	$jumlah_tiket = $_POST['jumlah_tiket'];
	$q = "update pembayaran set id_pembayaran='".$id_pembayaran."',id_nik='".$id_nik."', harga_total='".$harga_total."',jumlah_tiket='".$jumlah_tiket."' where id_pembayaran = '".$_GET['id']."'";
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
}
?>
<a href="pembayaran.php">Kembali</a>
