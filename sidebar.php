<div id="sidebar">
<h1>Support</h1>
<span style="margin-left: 75px;">
<?php
   echo $_SESSION['nama'];

?>
</span>


<br><br>
<ul>
<li>
  <h3><a href="beranda.php"><i class="fas fa-home"></i> Beranda</a></h3>
</li>
<li>
  <h3><i class="fas fa-desktop"></i> Aktiva Office</h3>
<ul>

  <li><a class="fa fa-laptop"></a><a href="index-cpu.php"> Komputer</a></li>
  <li><a class="fa fa-tv"></a> <a href="index-monitor.php"> Monitor</a></li>
  <li><a class="fa fa-print"></a> <a href="index-printer.php">Printer</a></li>
</ul>
</li>

<li>
  <h3><i class="fa fa-clipboard"></i> Aktiva DC</h3>
<ul>
  <li><a href="index-handheld.php">Handheld</a></li>
  <li><a href="index-intermac.php">Intermac</a></li>
  <li><a href="index-vehicle.php">Vehicle</a></li>
  <li><i class="fa fa-building"></i> <a href="index-scanner.php">Scanner</a></li>
</ul>
</li>

<li>
  <h3><i class="fa fa-paste"></i> Documentasi</h3>
<ul>
  <li><a class="fa fa-list"></a> <a href="surat-jalan.php">List Surat Jalan</a></li>
  <li><a class="fa fa-envelope-open"></a> <a href="add-surat-jalan.php">Input Surat Jalan</a></li>
  <li><a class="far fa-edit"></a> <a href="stiker-ribbon.php">Input Pemakaian Stiker&Ribbon</a></li>
  <li><a class="fas fa-newspaper"></a> <a href="tambah-labelSR.php">Tambah Stock Stiker Ribon</a></li>
</ul>
</li>

<li>
  <h3><i class="far fa-user"></i> Setting User</h3>
<ul>
  <li><i class="fa fa-user-plus"></i> <a href="register-user.php">Tambah User</a></li>
  <li><i class="fa fa-edit"></i> <a href="profil.php">Edit Profile</a></li>
  <li><i class="fa fa-list-alt"></i> <a href="list-user.php">List User</a></li>
</ul>
</li>



<li>
  <h3><i class="fas fa-info-circle"></i> Informasi</h3>
<ul>
  <li><i class="fas fa-net"></i> <a href="list-ip.php"> Daftar IP DC</a></li>
  <li><i class="fa fa-signal"> </i><a href="web-dc.php"> WEB DC</a></li>
  <li><i class="fab fa-envira"></i><a href="index-email.php"> Address Email DC</a></li>    
</ul>
</li>
<li>
  <h3><a href="index-pinjamHH.php"><i class="fa fa-hdd"></i> HH Di pinjam </a></h3>
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
