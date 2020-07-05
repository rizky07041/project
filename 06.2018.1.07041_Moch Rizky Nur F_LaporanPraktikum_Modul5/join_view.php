<?php
include 'connect.php';
?>
<h1>Join</h1>
<?php
$q = "select a.id_pembayaran, b.nama_pembeli
from pembayaran a
left join pembeli b
on a.id_nik=b.id_nik
where a.harga_total >= (select min(harga_total) from pembayaran)
";
$parsesql = oci_parse($conn, $q);
oci_execute($parsesql);
echo "
	<table border=1>
	<tr>
		<td>ID Pembayaran</td>
		<td>Nama Pembeli</td>
	</tr>
	";
while($rows=oci_fetch_object($parsesql)){
	echo "
	<tr>
		<td>".$rows->ID_PEMBAYARAN."</td>
		<td>".$rows->NAMA_PEMBELI."</td>
	</tr>
	";
}
echo "
	</table>
	";
?>

<h1>VIEW</h1>
<?php
$q = "select * from list_pelanggan";
$parsesql = oci_parse($conn, $q);
oci_execute($parsesql);
echo "
	<table border=1>
	<tr>
		<td>Nama Pembeli</td>
		<td>Alamat</td>
	</tr>
	";
while($rows=oci_fetch_object($parsesql)){
	echo "
	<tr>
		<td>".$rows->NAMA_PEMBELI."</td>
		<td>".$rows->ALAMAT."</td>
	</tr>
	";
}
echo "
	</table>
	";
?>	
<a href="pembeli.php">Kembali</a>