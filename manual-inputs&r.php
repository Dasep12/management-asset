<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="https://pencarikode.blogspot.com/" name="description" />
    <meta content="https://pencarikode.blogspot.com/" name="author" />
    <title>Aplikasi Support</title>
     <!-- TABLE STYLES-->
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
          <a href="login/logout.php">Logout</a> 
        </div>    
      <img src="img/logo1.png">  
</header>
<nav class="tanggal" style="margin-top: -12px;">
<span><marquee direction="left">Pemakaian Stiker Ribbon</marquee></span>
 <li>
<?php
function bulan(){
$bulan =date('m');
  switch ($bulan) {
    case '01':
      $bulan = "Januari";
      break;
    case '01':
      $bulan = "Januari";
      break;    
    case '03':
      $bulan = "Maret";
      break;
    case '04':
      $bulan = "April";
      break;
    case '05':
      $bulan = "Mei";
      break;    
    case '06':
      $bulan = "Juni";
      break;
    case '07':
      $bulan = "Juli";
      break;
    case '08':
      $bulan = "Agustus";
      break;    
    case '09':
      $bulan = "September";
    case '10':
      $bulan = "Oktober";
      break;
    case '11':
      $bulan = "November";
      break;    
    case '12':
      $bulan = "Desember";
      break;
      break;    default:
      # code...
      break;
  }
  return "".$bulan. "";
}
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
return "".$hari_ini.",";
}
echo hari_ini();
echo date('d ');
echo bulan();
echo date(' Y');
date_default_timezone_set("Asia/Jakarta");
?>
<div class="waktu">
<div class="wib"></div><div class="hari" id="output"></div>
</div>
 </li>
</nav>

<div id="sidebar">
<h1>Support</h1>
<span style="margin-left: 75px;text-transform: uppercase;">
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
  <li><a class="fa fa-envelope-open"></a> <a href="">Input Surat Jalan</a></li>
  <li><a class="far fa-edit"></a> <a href="">Input Pemakaian Stiker&Ribbon</a></li>
  <li><a class="fas fa-newspaper"></a> <a href="">Tambah Stock Stiker Ribon</a></li>
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
  <li><i class="far fa-mail"></i><a href=""> Address Email DC</a></li>     
</ul>
</li>
</ul>
</li>
</div>
<script type="text/javascript" src="../dc-g001/js/jquery.min.js"></script>
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
             <!-- Calender -->
    <link rel="stylesheet" type="text/css" href="calender/jquery.datetimepicker.min.css">
    <script type="text/javascript" src="calender/jquery.js"></script>
    <script type="text/javascript" src="calender/jquery.datetimepicker.full.js"></script>>
<br><br><br><br>
            <div class="panel-body" style="">
                            <div class="form-group" style="border: 1px solid #ccc;position: relative;top: -30px;height: 400px;box-shadow: 1px 2px 2px 2px gray;overflow-y: auto;background: rgba(0,60,45,.3);">
                              <div class="sub-judul-1">
                                <ul>
                                    <li><a href="stiker-ribbon.php?m&view=stiker-ribbon">Input Otomatis S&R</a></li>
                                    <li ><a href="stock-stiker-ribbon.php?m&view=stock">Stock Stiker Ribbon</a></li>
                                    <li ><a href="history.php?m&view=used">History Penggunaan</a></li>
                                    <li><a href="tambah-labelSR.php?m&view=add_stock">Tambah Stok Stiker & Ribbon</a></li>
                                    <li class="active"><a href="manual-inputs&r.php?m&view=used-manual">Input Manual Pemakaian</a></li>
                                 </ul>
                            </div><br><br><br>
   <form class="form-group" style="overflow: hidden;" action="manual-inputs&r.php" method="POST">
      <td colspan="2">
        <label>Pilih Zona</label><select name="zona" style="width: 50%;margin-bottom: 4px;position: relative;left: 20px;" class="form-control">
          <option value="Zona 6">Zona 6</option>
          <option value="Zona 7">Zona 7</option>
          <option value="Zona 8">Zona 8</option>
          <option value="Zona 9">Zona 9</option>
          <option value="Zona 10">Zona 10</option>
          <option value="Zona 11">Zona 11</option>
          <option value="Zona 12">Zona 12</option>
          <option value="Zona 13">Zona 13</option>
          <option value="Zona 14">Zona 14</option>
          <option value="Zona 15">Zona 15</option>
          <option value="Zona 16">Zona 16</option>
          <option value="Zona 17">Zona 17</option>
          <option value="Zona 18">Zona 18</option>
          <option value="Zona 19">Zona 19</option>
          <option value="Zona 20">Zona 20</option>
        </select>
      </td><tr>
      <input type="hidden" name="id_barang" value="1">
      <label>Stiker</label><input type="text" placeholder="isi 0 jika tak ada pergantian" class="form-control" name="stiker" style="width: 50%;margin-bottom: 4px;position: relative;left: 20px;" >
      <label>Ribbon</label><input type="text" placeholder="isi 0 jika tak ada pergantian" class="form-control" name="ribbon" style="width: 50%;margin-bottom: 4px;position: relative;left: 20px;">
      <td><label>Tanggal Pergantian</label><input type="text"  class="form-control" style="width: 50%;margin-bottom: 4px;position: relative;left: 20px;" value="<?php echo  date('Y-m-d');?>" width="50%" name="tanggal" placeholder="Tanggal" id="datetime"></td></tr><tr>
      <td><label>Keterangan</label><textarea name="ket" style="width: 50%;margin-bottom: 4px;position: relative;left: 20px;" class="form-control" placeholder="Isi Jika Ada"></textarea></td><tr>
      <td colspan="2"><input type="submit" style="padding: 3px 4px;margin-left: 25px;position: relative;" class="btn btn-primary" value="Simpan" name="simpan">
      <a href="history.php"> <input type="button" style="padding: 3px 9px;" class="btn btn-success" value="View"></td></tr><tr>
      <input type="hidden" name="user" >
      <input type="hidden" name="kode" value="SR1265EF65">
      
  </form>
<?php
include 'koneksi/koneksi.php';
if (isset($_POST['simpan'])) {
  $zona = $_POST['zona'];
  $user = $_SESSION['nama'];
  $tanggal = $_POST['tanggal'];
  $id_barang=$_POST['id_barang'];
  $stiker = $_POST['stiker'];
  $ribbon = $_POST['ribbon'];
  $ket = $_POST['ket'];
  $kode=$_POST['kode'];
 // $user = $_POST['user'];
  $add="INSERT INTO penggunaan (zona,tanggal , id_barang ,stiker ,ribbon,kode,user, ket) VALUES('$zona','$tanggal','$id_barang','$stiker','$ribbon','$kode','$user','$ket')";
  $tambah = mysqli_query($koneksi,$add);
?>
<script type="text/javascript">
  alert('Tersimpan')
  document.location.href='manual-inputs&r.php';
</script>
 <?php } ?>
</table>
</FORM>
</div>
<div class="calender" style="position: relative; left: 350px;">
        <!-- date timepicker-->
        <script>
        $("#datetime").datetimepicker();
        </script>
</div></td></tr></tr></form></div></div></div></div></div>
<label class="label-primary" style="font-size:  width: 100%; position: absolute; bottom: -120px;letter-spacing: 0.1em;right: 2px;">Copyright 2018 | Created BY Dasep Depiyawan</label>
   <!--Footer-->
</body>
</html>