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
                    window.location.href= 'add-handheld.php';
                })
            }
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Data Telah ditambahkan",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="add-handheld.php";
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
                    window.location.href= 'add-handheld.php';
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
    $data = mysqli_query($koneksi,"SELECT * FROM handheld WHERE sn='$_POST[sn]' or kode='$_POST[kode]'");
    $count = mysqli_num_rows($data);

    if(empty($sn) || empty($aktiva) || empty($merk) || empty($type) || empty($status) || empty($posisi) || empty($biaya) || empty($tahun) || empty($nilai_p) || empty($ket)||empty($update) || empty($kode)||empty($ip) ) {
      echo '<script>
              kosong();
            </script>';

   }elseif($count>0) {
      echo '<script>
                ketemu();
            </script>';
    }else{

      $qry="INSERT INTO handheld(merk,sn,aktiva,type,kode,ip,posisi,status,tahun_p,biaya_p,nilai_p,ket,tgl_update)VALUES('$merk','$sn','$aktiva','$type','$kode','$ip','$posisi','$status','$tahun','$biaya','$nilai_p','$ket','$update')";
      $add = mysqli_query($koneksi,$qry);
      echo '<script>
                berhasil();
            </script>';

    }
} ?>