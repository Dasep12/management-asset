<?php
    include "koneksi/koneksi.php";

  
    $id = $_POST['id'];
    $ip = $_POST['ip'];
    $user = $_POST['user'];
    $posisi = $_POST['posisi'];
    $ket=$_POST['ket'];
    $sql = mysqli_query($koneksi,"UPDATE  ip_dc SET user = '$user', ip = '$ip' ,posisi = '$posisi' , ket = '$ket' WHERE id=$id");

    if ($sql) {
        //jika  berhasil tampil ini
echo "<script type='text/javascript'>
    alert('Terupdate');
    document.location.href='list-ip.php';
</script> ";
   } else {
        // jika gagal tampil ini
        echo "Gagal Melakukan Perubahan: ";
    }   
?>