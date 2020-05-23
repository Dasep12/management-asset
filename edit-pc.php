<?php
    include "../dc-g001/koneksi/koneksi.php";

  
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $sn = $_POST['sn'];
    $aktiva=$_POST['aktiva'];
    $ram=$_POST['ram'];
    $ip =$_POST['ip'];
    $posisi=$_POST['posisi'];
    $status=$_POST['status'];
    $tahun=$_POST['tahun_p'];
    $biaya=$_POST['biaya_p'];
    $nilai_aktiva=$_POST['nilai_aktiva'];
    $ket=$_POST['ket'];
    $procesor = $_POST['procesor'];
    $update=$_POST['tgl_update'];
    $sql = mysqli_query($koneksi,"UPDATE komputer SET merk = '$merk', sn = '$sn' , aktiva = '$aktiva' , ram = '$ram', posisi = '$posisi' , status = '$status' , tahun_p = '$tahun' , nilai_aktiva = '$nilai_aktiva' , biaya_p = '$biaya' ,ket = '$ket' , tgl_update ='$update',ip='$ip', procesor ='$procesor' WHERE id=$id");

    if ($sql) {
        //jika  berhasil tampil ini
echo "<script type='text/javascript'>
    alert('Terupdate');
    document.location.href='index-cpu.php';
</script> ";
   } else {
        // jika gagal tampil ini
        echo "Gagal Melakukan Perubahan: ";
    }   
?>