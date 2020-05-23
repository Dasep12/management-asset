
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
                    window.location.href="index-vehicle.php";
                  });
            }
	            function gagal() {
                swal({
                    title: "Terhapus",
                    text: "Data Telah Dihapus Permanen",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="index-vehicle.php";
                  });
            }
</script>
<?php
include 'koneksi/koneksi.php';
$id = $_GET['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM vehicle WHERE id='$id'");
if ($hapus) {
	echo "<script>
		berhasil();
	</script>";
}else{
	echo "<script>
		gagal();
	</script>";

}

?>
</body>
</html>
