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
                    window.location.href= 'add-monitor.php';
                })
            }
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Data Telah ditambahkan",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="add-monitor.php";
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
                    window.location.href= 'add-monitor.php';
                })
            }
      </script>


<?php
if(isset($_POST['POST'])==" " ){
    echo "Masih Ada Data Kosong";
}else{
    if(isset($_POST['simpan'])){
        $merk=$_POST['merk'];
        $sn=$_POST['sn'];
        $aktiva=$_POST['aktiva'];
        $ukuran=$_POST['ukuran'];
        $posisi=$_POST['posisi'];
        $status=$_POST['status'];
        $tahun=$_POST['tahun_p'];
        $biaya=$_POST['biaya_p'];
        $nilai_aktiva=$_POST['nilai_aktiva'];
        $ket=$_POST['ket'];
        $update=$_POST['tgl_update'];
    $data = mysqli_query($koneksi,"SELECT * FROM monitor WHERE sn='$_POST[sn]' ");
    $row = mysqli_num_rows($data);
      if ($row>0) {
        echo "<script>
            ketemu();
        </script>";
      }elseif (empty($sn) || empty($aktiva)) {
        echo "<script>
            kosong();
        </script>";
      }else{
        $qry="INSERT INTO monitor(merk,sn,aktiva,ukuran,posisi,status,tahun_p,biaya_p,nilai_aktiva,ket,tgl_update)VALUES('$merk','$sn','$aktiva','$ukuran','$posisi','$status','$tahun','$biaya','$nilai_aktiva','$ket','$update')";
        $add = mysqli_query($koneksi,$qry);
        echo "<script type='text/javascript'>
            berhasil();
        </script>";
     }
    } 
  }
?>







