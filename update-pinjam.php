<<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Support</title>
<script type="text/javascript" src="sweetalert-master/sweetalert.min.js"></script>
</head>
<body>
<script type="text/javascript">
                function pinjam(){
                swal({
                    title: "Berhasil!",
                    text: "Handheld Dipinjamkan ke <?php echo $_POST['peminjam']?>",
                    icon: "success",
                    dangerMode: true,
                    buttons: [false, "OK"],
                }).then(function() {
                    window.location.href= 'master-pinjamHH.php';
                })
            }
                function gagal(){
                swal({
                    title: "Gagal!",
                    text: "Nama Harap Di isi",
                    icon: "warning",
                    dangerMode: false,
                    buttons: [false, "OK"],
                }).then(function() {
                    window.location.href= 'master-pinjamHH.php';
                })
            }            
</script>
<?php
    include "koneksi/koneksi.php";



session_start();
  
    $id = $_POST['id'];
    $peminjam = $_POST['peminjam'];
    $tgl = $_POST['tanggal_pinjam'];
    $support = $_SESSION['nama'];
    $jam = $_POST['jam_keluar'];
    $posisi = $_POST['posisi'];
    $status = $_POST['status'];
    if(empty($peminjam)){
            echo "<script>
                gagal();
          </script> ";
    }else{
    $row = "UPDATE handheld SET jam_keluar='$jam', tanggal_pinjam='$tgl' , support='$support', status='$status', posisi='$posisi', peminjam='$peminjam'  WHERE id=$id ";  
    $sql = 
    $sql = mysqli_query($koneksi,$row);
    if ($sql) {
        //jika  berhasil tampil ini
    echo "<script>
                pinjam();
          </script> ";
   }
}
   ?>
</body>
</html>
