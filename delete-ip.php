<?php
include'koneksi/koneksi.php';
$id = $_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM ip_dc WHERE id='$id'");
echo "<script type='text/javascript'>
	alert('Terhapus')
	document.location.href='list-ip.php';
</script>";
?>
