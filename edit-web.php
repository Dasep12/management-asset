<?php
    include "koneksi/koneksi.php";

  
    $id = $_POST['id'];
    $link = $_POST['link'];
    $web = $_POST['web'];
    $ket=$_POST['ket'];
    $sql = mysqli_query($koneksi,"UPDATE  web_dc SET web = '$web', link = '$link' ,ket = '$ket' WHERE id=$id");

    if ($sql) {
        //jika  berhasil tampil ini
echo "<script type='text/javascript'>
    alert('Terupdate');
    document.location.href='web-dc.php';
</script> ";
   } else {
        // jika gagal tampil ini
        echo "Gagal Melakukan Perubahan: ";
    }   
?>