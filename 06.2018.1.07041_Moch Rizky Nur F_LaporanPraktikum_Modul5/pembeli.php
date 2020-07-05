<?php
include 'connect.php';
?>
<h1>Tabel Case Gangguan</h1>
<?php
$q = "select * from pembeli";
$parsesql = oci_parse($conn, $q);
zoci_execute($parsesql);
echo "
	<table border=1>
	<tr>
		<td>ID NIK</td>
		<td>Nama Pembeli</td>
		<td>Jenis Kelamin</td>
		<td>Alamat</td>
		<td></td>
	</tr>
	";
while($rows=oci_fetch_object($parsesql)){
	echo "
	<tr>
		<td>".$rows->ID_NIK."</td>
		<td>".$rows->NAMA_PEMBELI."</td>
		<td>".$rows->JENIS_KELAMIN."</td>
		<td>".$rows->ALAMAT."</td>
		<td><a href='edit_pembeli.php?id=".$rows->ID_NIK."'>Edit</a> || <a href='hapus_pembeli.php?id=".$rows->ID_NIK."'>Hapus</a></td>
	</tr>
	";
}
echo "
	</table>
	";
?>

<a href="tambah_pembeli.php">Tambah</a><br>
<a href="..">Kembali</a>
