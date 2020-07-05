<?php
include 'connect.php';
$q = "select * from pembeli where id_nik='".$_GET['id']."'";
$parsesql = oci_parse($conn, $q);
oci_execute($parsesql);
$rows=oci_fetch_object($parsesql);
?>
<h1>Edit Pembeli</h1>
<form method=POST>
<table>
<tr><td>ID NIK</td><td><input type=text name='id_nik' value='<?php echo $rows->ID_NIK; ?>'</td></tr>
<tr><td>Nama Pembeli</td><td><input type=text name='nama_pembeli' value='<?php echo $rows->NAMA_PEMBELI; ?>'></td></tr>
<tr><td>Jenis Kelamin</td><td><input type=text name='jenis_kelamin' value='<?php echo $rows->JENIS_KELAMIN; ?>'></td></tr>
<tr><td>Alamat</td><td><input type=text name='alamat' value='<?php echo $rows->ALAMAT; ?>'></td></tr>
<tr><td rowspan='2'><input type=submit name='submit'></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){

	$id_nik = $_POST['id_nik'];
	$nama_pembeli = $_POST['nama_pembeli'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$q = "update pembeli set id_nik='".$id_nik."',nama_pembeli='".$nama_pembeli."', jenis_kelamin='".$jenis_kelamin."',alamat='".$alamat."' where id_nik = '".$_GET['id']."'";
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
}
?>
<a href="pembeli.php">Kembali</a>


