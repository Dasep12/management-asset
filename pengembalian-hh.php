<<!DOCTYPE html>
<html>
<head>
    <title></title>
<script src="assets/sweetalert/sweetalert.min.js"></script>
</head>
<body>
<?php
session_start();
?>
<script>
            function balik(){
                swal({
                    title: "Handheld Kembali ,Terima Kasih!",
                    text: "Handheld Anda Yang Terima Ya <?=$_SESSION['nama'];?>",
                    icon: "success",
                    dangerMode: true,
                    buttons: [false, "OK"],
                }).then(function() {
                    window.location.href= 'index-pinjamHH.php';
                })
            }
</script>

<?php
    include "koneksi/koneksi.php";
  
    $id = $_POST['id'];
    $peminjam = $_POST['peminjam'];
    $tgl = $_POST['tanggal_pinjam'];
    $balik = $_POST['tanggal_balik'];
        $hari_pinjam = new DateTime($tgl);
        $hari_balik = new DateTime($balik);
        $selisih = $hari_balik->diff($hari_pinjam);
        $hari = $selisih->format('%d Hari');
    $penerima = $_SESSION['nama'];
    $sebelumnya = $_POST['posisi_sebelumnya'];
    $support = $_POST['support'];
    $kembali =$_POST['dikembalikan'];
    $posisi = $_POST['posisi'];
    $status = $_POST['status'];
    $kode = $_POST['kode'];
    $sn = $_POST['sn'];
    $aktiva = $_POST['aktiva'];
    $row = "UPDATE handheld SET tanggal_pinjam='$tgl' , support='$support', status='$status', posisi='$posisi', peminjam='$peminjam' ,dikembalikan='$kembali', posisi_sebelumnya='$sebelumnya', tanggal_balik='$balik' WHERE id=$id "; 
    $sql = mysqli_query($koneksi,$row);
    $add = mysqli_query($koneksi,"INSERT INTO history_pinjamhh(peminjam,tanggal_pinjam,tanggal_balik,posisi_sebelumnya,support,posisi ,kode,sn,aktiva,lama_hari,penerima)VALUES('$peminjam','$tgl' ,'$balik','$sebelumnya','$support' ,'$posisi' ,'$kode' ,'$sn' ,'$aktiva','$hari','$penerima' )");

        //jika  berhasil tampil ini
echo "<script>
            balik();
     </script> ";  
?>

</body>
</html>
