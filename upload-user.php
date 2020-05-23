<?php
include 'koneksi/koneksi.php';

//folder direktory
  $folder = './file';
//ekstensi diijinkan
  $ekstensi_diijinkan = array('png','jpg','jpeg');

if (isset($_POST['simpan'])) {
//nama file poto profile  
  $nama_file = $_FILES['filename']['name'];
//ukuran file
  $ukuran = $_FILES['filename']['size'];
  $nama = $_POST['name'];
  $pass = md5($_POST['pass']);
  $nik = $_POST['nik'];
  $password = $pass;
  $group = $_POST['group_user'];

//seleksi ekstensi file 
  $explode = explode('.', $nama_file );
  $ekstensi = $explode[count($explode)-1];
//Batasan ukuran file di upload
  $max_size = 120000;

  if(!in_array($ekstensi,$ekstensi_diijinkan)) {
    echo "<script>
        alert('Gagal');
        document.location.href='register-user.php';
     </script>";
  }elseif(empty($nama_file) || empty($nama) || empty($pass)) {
      echo "alert('Data Tidak Boleh Kosong');
        document.location.href='register-user.php';
     </script>";
  }

    //mulai seleksi tipe file
  elseif(move_uploaded_file($_FILES['filename']['tmp_name'], $folder . $nama_file)) {
    $row = mysqli_query($koneksi,"INSERT INTO user (filename,folder,nama,pass,group_user,nik)VALUES('$nama_file','$folder','$nama','$password','$group','$nik')");
    echo "<script>
        alert('Berhasil');
        document.location.href='register-user.php';
     </script>";
  }
}

?>