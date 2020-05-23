<?php
    include "koneksi/koneksi.php";

  
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $sn = $_POST['sn'];
    $aktiva=$_POST['aktiva'];
    $ukuran=$_POST['ukuran'];
    $posisi=$_POST['posisi'];
    $status=$_POST['status'];
    $tahun=$_POST['tahun_p'];
    $biaya=$_POST['biaya_p'];
    $nilai_aktiva=$_POST['nilai_aktiva'];
    $ket=$_POST['ket'];
    $update=$_POST['tgl_update'];
    $sql = mysqli_query($koneksi,"UPDATE  monitor SET merk = '$merk', sn = '$sn' , aktiva = '$aktiva' , ukuran = '$ukuran', posisi = '$posisi' , status = '$status' , tahun_p = '$tahun' , nilai_aktiva = '$nilai_aktiva' , biaya_p = '$biaya' ,ket = '$ket' , tgl_update ='$update' WHERE id=$id");

    if ($sql) {
        //jika  berhasil tampil ini
echo "<script type='text/javascript'>
    alert('Terupdate');
    document.location.href='index-monitor.php';
</script> ";
   } else {
        // jika gagal tampil ini
        echo "Gagal Melakukan Perubahan: ";
    }   
?>