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
                    window.location.href= 'add-printer.php';
                })
            }
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Data Telah ditambahkan",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="add-printer.php";
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
                    window.location.href= 'add-printer.php';
                })
            }
      </script>

<?php
include 'koneksi/koneksi.php';
	if(isset($_POST['simpan'])){
		$merk = $_POST['merk'];
		$sn = $_POST['sn'];
		$kode = $_POST['kode'];
		$aktiva = $_POST['aktiva'];
		$type = $_POST['type'];
		$posisi = $_POST['posisi'];
		$status = $_POST['status'];
		$tahun = $_POST['tahun_p'];
		$biaya = $_POST['biaya_p'];
		$nilai_aktiva =$_POST['nilai_aktiva'];
		$ket = $_POST['ket'];
		$tgl = $_POST['tgl_update'];
    $data = mysqli_query($koneksi,"SELECT * FROM printer WHERE sn='$_POST[sn]'");
    $row = mysqli_num_rows($data);
      if ($row>0) {
          echo "<script type='text/javascript'>
          		ketemu();
          </script>";
      }elseif (empty($sn) || empty($aktiva) || empty($type) || empty($posisi)) {
          echo "<script type='text/javascript'>
          	kosong();
          </script>";        
      }else{
        $add = mysqli_query($koneksi,"INSERT INTO printer(merk,sn,aktiva,type,posisi,status,tahun_p,biaya_p,nilai_aktiva,ket,tgl_update,kode)VALUES('$merk','$sn','$aktiva','$type','$posisi','$status','$tahun','$biaya' , '$nilai_aktiva' ,'$ket' ,'$tgl','$kode')");
         echo "<script type='text/javascript'>
         	berhasil();
          </script>"; 
      }


 } 
 ?>
