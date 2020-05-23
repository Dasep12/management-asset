<?php
include 'koneksi/koneksi.php';
$id = $_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM email WHERE id='$id'");
 echo "
<script type='text/javascript'>
	alert('Terhapus');
	document.location.href='index-email.php';
</script>";	
?>