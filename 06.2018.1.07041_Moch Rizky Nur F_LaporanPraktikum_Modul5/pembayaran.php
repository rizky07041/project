<?php
include 'connect.php';
?>
<h1>Tabel Pembayaran</h1>
<?php
$q = "select * from pembayaran";
$parsesql = oci_parse($conn, $q);
$tes = oci_execute($parsesql);
echo "
	<table border=1>
	<tr>
		<td>ID Pembayaran</td>
		<td>ID NIK</td>
		<td>Harga Total</td>
		<td>Jumlah Tiket</td>
		<td></td>
	</tr>
	";
while($rows=oci_fetch_object($parsesql)){
	echo "
	<tr>
		<td>".$rows->ID_PEMBAYARAN."</td>
		<td>".$rows->ID_NIK."</td>
		<td>".$rows->HARGA_TOTAL."</td>
		<td>".$rows->JUMLAH_TIKET."</td>
		<td><a href='edit_pembayaran.php?id=".$rows->ID_PEMBAYARAN."'>Edit</a> || <a href='hapus_pembayaran.php?id=".$rows->ID_PEMBAYARAN."'>Hapus</a></td>
	</tr>
	";
}
echo "
	</table>
	";
?>

<a href="tambah_pembayaran.php">Tambah</a><br>
<a href="index.php">Kembali</a>
