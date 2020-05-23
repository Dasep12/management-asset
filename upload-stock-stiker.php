    <script type="text/javascript" src="sweetalert-master/sweetalert.min.js"></script> 
     <script >
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Stock Bertambah",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="tambah-labelSR.php";
                  });
            }
      </script>
<?php
include 'koneksi/koneksi.php';
if (isset($_POST['simpan'])) {
    $stiker = $_POST['stiker'];
    $ribbon = $_POST['ribbon'];
    $id = $_POST['id_barang'];
    if (empty($stiker) || empty($ribbon)) {
      echo "<div class='label-info' style='position:relative;top:50px;border-radius:1px;text-align:center;width:50%;height:5%;padding:2px;left:200px;'>Data Tidak Boleh Kosong</div>";
    }else{
    $add = "INSERT INTO pembelian (id_barang,stiker,ribbon)VALUES('$id','$stiker','$ribbon')";
      $tambah = mysqli_query($koneksi,$add);
      echo"<script>
          berhasil();
      </script>";
    }
  }
?>