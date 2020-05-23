<?php
    include "koneksi/koneksi.php";

  
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $sn = $_POST['sn'];
    $aktiva=$_POST['aktiva'];
    $posisi=$_POST['posisi'];
    $status=$_POST['status'];
    $tahun=$_POST['tahun_p'];
    $biaya=$_POST['biaya_p'];
    $nilai_p=$_POST['nilai_p'];
    $ket=$_POST['ket'];
    $type = $_POST['type'];
    $update=$_POST['tgl_update'];
    $sql = mysqli_query($koneksi,"UPDATE vehicle SET merk = '$merk', sn = '$sn' , aktiva = '$aktiva' , posisi = '$posisi' , status = '$status' , tahun_p = '$tahun' , nilai_p = '$nilai_p' , biaya_p = '$biaya' ,ket = '$ket' , tgl_update ='$update', type ='$type' WHERE id=$id");

    if ($sql) {
        //jika  berhasil tampil ini
        echo "<script type='text/javascript'>
        alert('Terupdate');
        document.location.href='index-vehicle.php';
        </script> ";    
   } else {
        // jika gagal tampil ini
        echo "<script type='text/javascript'>
        alert('Upss Gagal ! ! !');
        document.location.href='index-vehicle.php';
        </script> ";    
    }   
?>