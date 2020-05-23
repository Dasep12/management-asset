<?php

include'koneksi/koneksi.php';
session_start();
if(session_destroy()){
echo "<script type='text/javascript'>
	alert('BYE')
	document.location.href='index.php';
</script>";
}
?>