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
                    window.location.href= 'add-vehicle.php';
                })
            }
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Data Telah ditambahkan",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="add-vehicle.php";
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
                    window.location.href= 'add-vehicle.php';
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
    $posisi=$_POST['posisi'];
    $status=$_POST['status'];
    $tahun=$_POST['tahun_p'];
    $biaya=$_POST['biaya_p'];
    $nilai_p=$_POST['nilai_p'];
    $ket=$_POST['ket'];
    $update=$_POST['tgl_update'];
    $qry = mysqli_query($koneksi,"SELECT * FROM vehicle WHERE sn='$_POST[sn]'");
    $seleksi = mysqli_num_rows($qry);

      if(empty($sn) || empty($aktiva) || empty($merk) || empty($type) || empty($status) || empty($posisi) || empty($biaya) || empty($tahun) || empty($nilai_p) || empty($ket)||empty($update) ) {
            echo "<script>
                kosong();
            </script> ";
      }elseif ($seleksi>0) {
            echo "<script type='text/javascript'>
                ketemu();
            </script> ";
      }else{
            $qry="INSERT INTO vehicle(merk,sn,aktiva,type,posisi,status,tahun_p,biaya_p,nilai_p,ket,tgl_update)VALUES('$merk','$sn','$aktiva','$type','$posisi','$status','$tahun','$biaya','$nilai_p','$ket','$update')";
            $add = mysqli_query($koneksi,$qry);
            echo "<script type='text/javascript'>
                berhasil();
            </script> ";
      }
 }
?>

