<?php
include 'connect.php';
?>
<h1>Tambah Pembeli</h1>
<form method=POST>
<table>	
<tr><td>ID NIK</td><td><input type=number name='id_nik'></td></tr>
<tr><td>Nama Pembeli</td><td><input type=text name='nama_pembeli'></td></tr>
<tr><td>Jenis Kelamin</td><td><input type=text name='jenis_kelamin'></td></tr>
<tr><td>Alamat</td><td><input type=text name='alamat'></td></tr>
<tr><td rowspan='2'><input type=submit name='submit'></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){

	$id_nik = $_POST['id_nik'];
	$nama_pembeli = $_POST['nama_pembeli'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$q = "insert into pembeli values(".$id_nik.",'".$nama_pembeli."','".$jenis_kelamin."','".$alamat."')";
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
}
?>
<a href="pembeli.php">Kembali</a>


