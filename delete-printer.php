
<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="assets/sweetalert/sweetalert.min.js"></script>
</head>
<body>
<script type="text/javascript">
	            function berhasil() {
                swal({
                    title: "Terhapus",
                    text: "Data Telah Dihapus Permanen",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="index-printer.php";
                  });
            }
</script>
<?php
include 'koneksi/koneksi.php';

$id = $_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM printer WHERE id='$id'");
	echo "<script>
		berhasil();
	</script>";
	
?>
</body>
</html>