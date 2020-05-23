<?php
    include "koneksi/koneksi.php";

  
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $sn = $_POST['sn'];
    $aktiva=$_POST['aktiva'];
    $kode=$_POST['kode'];
    $ip =$_POST['ip'];
    $posisi=$_POST['posisi'];
    $status=$_POST['status'];
    $tahun=$_POST['tahun_p'];
    $biaya=$_POST['biaya_p'];
    $nilai_p=$_POST['nilai_p'];
    $ket=$_POST['ket'];
    $type = $_POST['type'];
    $update=$_POST['tgl_update'];
    $sql = mysqli_query($koneksi,"UPDATE intermac SET merk = '$merk', sn = '$sn' , aktiva = '$aktiva' , kode = '$kode', posisi = '$posisi' , status = '$status' , tahun_p = '$tahun' , nilai_p = '$nilai_p' , biaya_p = '$biaya' ,ket = '$ket' , tgl_update ='$update',ip='$ip', type ='$type' WHERE id=$id");

    if ($sql) {
        //jika  berhasil tampil ini
        echo "<script type='text/javascript'>
        alert('Terupdate');
        document.location.href='index-intermac.php';
        </script> ";    
   } else {
        // jika gagal tampil ini
        echo "Gagal Melakukan Perubahan: ";
    }   
?>