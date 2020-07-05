<?php
include 'connect.php';
?>
<h1></h1>
<form method=POST>
<h3>Hapus ID Pembayaran <?php echo $_GET['id'];?> ?</h3>
<input type='submit' name='submit'> <a href='pembayaran.php'>Kembali</a>
</form>
<?php
if(isset($_POST['submit'])){
	$q = "delete from pembayaran where id_pembayaran ='".$_GET['id']."'";
	$parsesql = oci_parse($conn, $q);
	oci_execute($parsesql);
	header('Location: pembayaran.php');
}
?>

