<?php
include 'koneksi/koneksi.php';
include 'PHPExcel.php';
session_start();
if (empty($_SESSION['nama'])) {
 header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Support</title>
     <!-- TABLE STYLES-->
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.0.2/web-fonts-with-css/font-awesome/fontawesome-all.css">
    <script defer src="fontawesome-free-5.0.2/svg-with-js/js/fontawesome-all.min.js"></script>
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
          <a onclick="return confirm('Yakin Keluar')" href="logout.php"><i class="fa fa-user-md" ></i></a> 
        </div>
      
      <img src="img/logo1.png">
         
</header>