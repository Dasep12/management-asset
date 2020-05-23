<?php
include 'koneksi/koneksi.php';
$id = $_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM web_dc WHERE id=$id");
echo "<script type='text/javascript'>
	alert('Terhapus');
	document.location.href='web-dc.php';
</script>";
?>
