    <script type="text/javascript" src="sweetalert-master/sweetalert.min.js"></script> 
     <script >
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "stiker-ribbon Di input",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="input-manual-stiker.php";
                  });
            }
      </script>
   
<?php
include 'koneksi/koneksi.php';
if (isset($_POST['simpan'])) {
  $zona = $_POST['zona'];
  $user = $_SESSION['nama'];
  $tanggal = $_POST['tanggal'];
  $id_barang=$_POST['id_barang'];
  $stiker = $_POST['stiker'];
  $ribbon = $_POST['ribbon'];
  $ket = $_POST['ket'];
  $kode=$_POST['kode'];
 // $user = $_POST['user'];
        $add="INSERT INTO penggunaan (zona,tanggal , id_barang ,stiker ,ribbon,kode,user, ket) VALUES('$zona','$tanggal','$id_barang','$stiker','$ribbon','$kode','$user','$ket')";
        $tambah = mysqli_query($koneksi,$add);
        echo "<script>
        berhasil();
        </script> " ;
    }
 ?>
