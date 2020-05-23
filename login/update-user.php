<?php
include '../koneksi/koneksi.php';
$eror = true ;
$folder = './file/';

//type file yang bisa di upload 
$file_type = array('jpg','png','jpeg');

//tentukan ukuran 
$max_size = 12000000;
if(isset($_POST['daftar'])){
  //Mulai memories database
  $file_name = $_FILES['filename']['name'];
  $file_size = $_FILES['filename']['size'];
  $nama = $_POST['nama'];
  $pass =md5($_POST['pass']);
  $password = $pass;
  $group = $_POST['group_user'];
  $nik = $_POST['nik'];  
  //cari ekstensi file dengan expload 
  $explode = explode('.', $file_name);
  $extensi =  $explode[count($explode)-1];
  //check apakah file sesuai dengan yang di ijinkan
  if(!in_array($extensi, $file_type)){
    $pesan = 'Type File salah<br>';
    echo $pesan;
  }if($file_size>$max_size){
    $pesan = 'Ukuran file terlalu besar'; 
    echo  $pesan;
  }
  else{
    //mulai proses data 
    if(move_uploaded_file($_FILES['filename']['tmp_name'],$folder . $file_name)){
      //catat nama file ke database 
      $catat = mysqli_query($koneksi,"UPDATE user set filename='$file_name' ,folder='$folder' , nama = '$nama' , pass='$password' ,nik='$nik' ,group_user='$group'");
      echo "<script type='text/javascript'>
      alert('Diperbarui');
      document.location.href='register-user.php';
      </script>";      
    }else{
      if($seleksi<0) {
      echo "<script type='text/javascript'>
      alert('User Sudah Ada ');
      document.location.href='register-user.php';
      </script>";    
    }
    }
  }
}
?>