    <script type="text/javascript" src="sweetalert-master/sweetalert.min.js"></script> 
     <script >
            function kosong(){
                swal({
                    title: "PERHATIAN!",
                    text: "Ada inputan yang kosong",
                    icon: "warning",
                    dangerMode: true,
                    buttons: [false, "OK"],
                }).then(function() {
                    window.location.href= 'add-intermac.php';
                })
            }
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Data Telah ditambahkan",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="add-intermac.php";
                  });
            }
            function ketemu(){
                swal({
                    title: "PERHATIAN!",
                    text: "Data sudah ada",
                    icon: "warning",
                    dangerMode: true,
                    buttons: [false, "OK"],
                }).then(function() {
                    window.location.href= 'add-intermac.php';
                })
            }
      </script>

  <?php
include'koneksi/koneksi.php';
  if(isset($_POST['simpan'])){
    $merk=$_POST['merk'];
    $sn=$_POST['sn'];
    $aktiva=$_POST['aktiva'];
    $type=$_POST['type'];
    $kode=$_POST['kode'];
    $ip=$_POST['ip'];
    $posisi=$_POST['posisi'];
    $status=$_POST['status'];
    $tahun=$_POST['tahun_p'];
    $biaya=$_POST['biaya_p'];
    $nilai_p=$_POST['nilai_p'];
    $ket=$_POST['ket'];
    $update=$_POST['tgl_update'];
    $qry="INSERT INTO intermac(merk,sn,aktiva,type,kode,ip,posisi,status,tahun_p,biaya_p,nilai_p,ket,tgl_update)VALUES('$merk','$sn','$aktiva','$type','$kode','$ip','$posisi','$status','$tahun','$biaya','$nilai_p','$ket','$update')";
    $data = mysqli_query($koneksi,"SELECT * FROM intermac WHERE sn='$_POST[sn]' or ip='$_POST[ip]'");
    $row = mysqli_num_rows($data);
    if ($row>0) {
      echo "<script>
          ketemu();
      </script>";
    }elseif (empty($sn) || empty($aktiva) || empty($ip) || empty($posisi)|| empty($tahun) || empty($biaya) || empty($nilai_p)|| empty($kode) || empty($update) || empty($ket)) {
      echo "<script>
          kosong();
      </script>";
    }else{
      $add = mysqli_query($koneksi,$qry);
      echo "<script>
          berhasil();
      </script>";
      }
 } 

 ?>