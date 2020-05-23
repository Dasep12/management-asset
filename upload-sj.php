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
                    window.location.href= 'add-surat-jalan.php';
                })
            }
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Data Telah ditambahkan",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="add-surat-jalan.php";
                  });
            }
      </script> 
<?php
$eror = true ;
$folder = './lampiran/';

//type file yang bisa di upload 
$file_type = array('jpg','png','jpeg');

//tentukan ukuran 
$max_size = 1000000;
if(isset($_POST['simpan'])){
  //Mulai memories database
  $file_name = $_FILES['filename']['name'];
  $file_size = $_FILES['filename']['size'];
    $nosj=$_POST['nomor_sj'];
    $nabar= $_POST['nama_barang'];
    $pengirim = $_POST['pengirim'];
    $penerima = $_POST['penerima'];
    $tujuan = $_POST['tujuan'];
    $type_sj =$_POST['type_sj'];
    $detail = $_POST['detail'];
    $ket = $_POST['ket'];
    $tgl =$_POST['tanggal_kirim'];
    $qty = $_POST['qty'];
    $type_kirim =$_POST['type_kirim'];
  //cari ekstensi file dengan expload 
  $explode = explode('.', $file_name);
  $extensi =  $explode[count($explode)-1];

  //check apakah file sesuai dengan yang di ijinkan
  if(!in_array($extensi, $file_type)){
    $pesan = 'Type File salah<br>';
    echo'<div style="position:relative;z-index:888;">' .$pesan. '</div>';
  }if($file_size>$max_size){
    $pesan = 'Ukuran file terlalu besar'; 
    echo  $pesan;
  }if(empty($nosj) || empty($detail) || empty($qty)){ ?>
      <script >
          kosong();
      </script>
<?php  }
  else{
    //mulai proses data 
    if(move_uploaded_file($_FILES['filename']['tmp_name'],$folder . $file_name)){
      //catat nama file ke database 
      $catat = mysqli_query($koneksi,'INSERT INTO sj_keluar(filename, ket, folder, nomor_sj, nama_barang , pengirim , penerima , tujuan , type_sj , detail ,  tanggal_kirim , qty , type_kirim)VALUES ("'.$file_name.'","'.$ket.'","'.$folder.'","'.$nosj.'","'.$nabar.'","'.$pengirim.'","'.$penerima.'","'.$tujuan.'","'.$type_sj.'","'.$detail.'","'.$tgl.'","'.$qty.'","'.$type_kirim.'")'); ?>
<script type="text/javascript" src="sweetalert-master/sweetalert.min.js"></script>

     <script>
            berhasil();
        </script>";      
<?php    }else{
      echo "Gagal";
    }
  }
}


?>