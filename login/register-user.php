<?php
include '../koneksi/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="https://pencarikode.blogspot.com/" name="description" />
    <meta content="https://pencarikode.blogspot.com/" name="author" />
    <title>Aplikasi Support</title>
     <!-- TABLE STYLES-->
    <link href="../css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script defer src="../fontawesome-free-5.0.2/svg-with-js/js/fontawesome-all.min.js"></script>
<script type="text/javascript">
  // 1 detik = 1000
  windows.setTimeout("waktu()",10000);
  function waktu(){
    var tanggal = new Date();
    setTimeout("waktu()",1000);
    document.getElementById('output').innerHTML =tanggal.getHours()+":" +tanggal.getMinutes()+":"+tanggal.getSeconds();
  }
</script>
</head>
<body onload="waktu()">
<header class="page-header">
      <h2>PT Indomarco Prismatama</h2>
      <span>DC Jakarta | G001 | Aplikasi Support </span>
        <div class="logout">
          <a href="logout.php">Logout</a> 
        </div>    
      <img src="img/logo1.png">
         
</header>
<nav class="tanggal" style="margin-top: -12px;">
<span><marquee direction="left">CPU Baik</marquee></span>
 <li>
<?php
function hari_ini(){
$hari = date('D');
switch ($hari) {
  case 'Sun':
    $hari_ini = "Minggu";
    break;
  case 'Mon':
    $hari_ini = "Senin";
    break;
    case 'Tue':
    $hari_ini = "Selasa";
    break;
  case 'Wed':
    $hari_ini = "Rabu";
    break;
     case 'Thu':
    $hari_ini = "Kamis";
    break;
  case 'Fri':
    $hari_ini = "Jumat";
    break; 
  case 'Sat':
    $hari_ini = "Sabtu";
    break;
  default:
    $hari_ini = "Tidak Diketahui";
    break;
}
return "".$hari_ini. ",";
}
echo hari_ini();
echo date('d-m-Y');
date_default_timezone_set("Asia/Jakarta");
echo "";
//$jam = date('H:i');
?>
<div class="waktu">
<div class="wib">Jam : </div><div class="hari" id="output"></div>
</div>
 </li>
</nav>
</nav>


<div id="sidebar">
<h1>Support</h1>
<span style="margin-left: 75px;">
<?php
session_start();
echo $_SESSION['nama'];

?>
</span>
<br><br>
<ul>
<li>
  <h3><i class="fas fa-home"></i><a href=""> Beranda</a></h3>
</li>
<li>
  <h3><i class="fas fa-desktop"></i> Aktiva Office</h3>
<ul>
  <li><a class="fa fa-laptop"></a><a href=""> Komputer</a></li>
  <li><a class="fa fa-tv"></a> <a href=""> Monitor</a></li>
  <li><a class="fa fa-print"></a> <a href="">Printer</a></li>
</ul>
</li>

<li>
  <h3><i class="fa fa-clipboard"></i> Aktiva DC</h3>
<ul>
  <li><a href="">Handheld</a></li>
  <li><a href="">Intermac</a></li>
  <li><a href="">Vehicle</a></li>
  <li><i class="fab fa-centercode"></i> <a href="">Scanner</a></li>
</ul>
</li>

<li>
  <h3><i class="fa fa-paste"></i> Documentasi</h3>
<ul>
  <li><a class="fa fa-list"></a> <a href="">List Surat Jalan</a></li>
  <li><a class="fa fa-pencil-alt"></a> <a href="">Input Surat Jalan</a></li>
</ul>
</li>

<li>
  <h3><i class="far fa-user"></i> Setting User</h3>
<ul>
  <li><i class="fa fa-user-plus"></i> <a href="">Tambah User</a></li>
  <li><i class="fa fa-edit"></i> <a href="">Edit Profile</a></li>
  <li><i class="fa fa-list-alt"></i> <a href="">List User</a></li>
</ul>
</li>



<li>
  <h3><i class="fas fa-info-circle"></i> Informasi</h3>
<ul>
  <li><i class="fas fa-net"></i> <a href=""> Daftar IP DC</a></li>
  <li><i class="fa fa-link"> </i><a href=""> WEB DC</a></li>
  <li><i class="far fa-envelope"></i><a href=""> Address Email DC</a></li>     
</ul>
</li>
</ul>
</li>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script>

/*jQuery time*/
$(document).ready(function(){
 $("#sidebar h3").click(function(){
  //slide up all the link lists
  $("#sidebar ul ul ").slideUp();
  //slide down the link list below the h3 clicked - only if its closed
  if(!$(this).next().is(":visible"))
  {
   $(this).next().slideDown();
  }
 })
})
</script>

<div id="container">
	<div class="sub-container">
		<div class="header">
			<h1>Pendaftaran User <a class="fa fa-user-plus"></a></h1>
		</div>
			<form action="register-user.php" enctype="multipart/form-data" method="POST">
				<div class="icon-user">
					<a class="fa fa-user-secret"></a>
				</div>
					 <input type="text" placeholder="Username" title="isi nama"  name="nama"  class="form-control">					 
				<div class="icon-user">
					<a class="fa fa-id-card"></a>
				</div>
					<input type="text" placeholder="NIK" name="nik"  title="isi nik"  class="form-control">
				<div class="icon-user">
					<a class="fa fa-lock"></a>
				</div>								 
					<input type="password" name="pass" placeholder="Password"  title="isi password" class="form-control">
				<div class="icon-user">
					<a class="fa fa-users"></a>
				</div>
					<select name="group_user"   class="form-control">
						<option value=" ">-Pilih Group-</option>
						<option value="Support">Support</option>
						<option value="Admin">Admin</option>
					</select>
				<div class="icon-user">
					<a class="fa fa-user-circle"></a>
				</div>
					<input type="file" name="filename" class="form-control-1" style="font-size: 11px;">
					<input type="submit" name="daftar" value="Daftar" class="btn btn-success">
          <a href="../list-user.php" target="blank"><button style="position: relative;top: 8px;"  class="btn btn-info">View</button></a>	
			</form>
		</div>
	</div>
</div>
<?php
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
  $qry = mysqli_query($koneksi,"SELECT * FROM user WHERE nik='$_POST[nik]' OR nama='$_POST[nama]'");
  $seleksi = mysqli_num_rows($qry);  
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
      $catat = mysqli_query($koneksi,"INSERT INTO user(filename,folder,nama,pass,nik,group_user)VALUES ('$file_name','$folder','$nama','$password','$nik','$group')");
      echo "<script type='text/javascript'>
      alert('Menambah $nama sebagai $group ');
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
</body>
<label class="label-primary" style="font-size:  width: 100%; position: absolute; bottom: -120px;letter-spacing: 0.1em;right: 2px;">Copyright 2018 | Created BY Dasep Depiyawan</label>
</html>