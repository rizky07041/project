<?php
include 'connect.php';
?>
<h1></h1>
<form method=POST>
<h3>Hapus ID NIK <?php echo $_GET['id'];?> ?</h3>
<input type='submit' name='submit'> <a href='pembeli.php'>Kembali</a>
</form>
<?php
if(isset($_POST['submit'])){
	$q = "delete from pembeli where id_nik ='".$_GET['id']."'";
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
	header('Location: pembeli.php');
}
?>

