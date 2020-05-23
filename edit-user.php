<?php
    include "koneksi/koneksi.php";

  
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $pass = md5($_POST['pass']);
    $group=$_POST['group_user'];
    $status = $_POST['status'];

    $sql = mysqli_query($koneksi," UPDATE user set nama='$nama' , pass='$pass' , group_user='$group'  , nik='$nik' , status = '$status' WHERE id=$id");

    if ($sql) {
        //jika  berhasil tampil ini
echo "<script type='text/javascript'>
    alert('Terupdate');
    document.location.href='list-user.php';
</script> ";
   } else {
        // jika gagal tampil ini
        echo "Gagal Melakukan Perubahan: ";
    }   
?>