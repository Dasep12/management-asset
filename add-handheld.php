<?php
include 'header.php';
?>

<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Handheld / Entri Data</span>
 <li>
<?php
include 'waktu.php';
?>
<div class="waktu">
<div class="wib"></div><div class="hari" id="output"></div>
</div>
 </li>
</nav>

<div id="sidebar">
<h1>Support</h1>
<span style="margin-left: 75px;">Dasep</span>
<br><br>
<ul>
<li>
  <h3><i class="fas fa-home"></i><a href=""> Beranda</a></h3>
</li>
<li>
  <h3><i class="fas fa-desktop"></i> Aktiva Office</h3>
<ul>
  <li><a href="">Komputer</a></li>
  <li><a href="">Monitor</a></li>
  <li><a href="">Printer</a></li>
</ul>
</li>

<li>
  <h3><i class="fas fa-exl"></i> Aktiva DC</h3>
<ul>
  <li><a href="">Handheld</a></li>
  <li><a href="">Intermac</a></li>
  <li><a href="">Vehicle</a></li>
  <li><a href="">Scanner</a></li>
</ul>
</li>

<li>
  <h3><i class="fas fa-book"></i> Documentasi</h3>
<ul>
  <li><a href="">List Surat Jalan</a></li>
  <li><a href="">Input Surat Jalan</a></li>
</ul>
</li>

<li>
  <h3><i class="far fa-user"></i> Setting User</h3>
<ul>
  <li><a href="">Tambah User</a></li>
  <li><a href="">Edit Profile</a></li>
  <li><a href="">List User</a></li>
</ul>
</li>



<li>
  <h3><i class="fas fa-info-circle"></i> Informasi</h3>
<ul>
  <li><a href="">Daftar IP DC</a></li>
  <li><a href="">WEB DC</a></li>
  <li><a href="">Address Email DC</a></li>     
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
  //slide down the link list below the h3 clicked - only if its close-1d
  if(!$(this).next().is(":visible"))
  {
   $(this).next().slideDown();
  }
 })
})
</script>
						 <!-- Calender -->
		<link rel="stylesheet" type="text/css" href="calender/jquery.datetimepicker.min.css">
		<script type="text/javascript" src="calender/jquery.js"></script>
		<script type="text/javascript" src="calender/jquery.datetimepicker.full.js"></script>


<div id="container">
  <div class="box-header">
    <h5>Entri Data Handheld</h5>
    </div>
		<div class="box-add">
      <form name="datetimepicker" action="add-handheld.php" method="POST">
      <label>Merk</label><input type="text" class="box-input"  placeholder="Merk" name="merk" >
      <label>Kode Unit</label><input type="text" placeholder="Kode Unit" name="kode" class="box-input">
      <label>Serial Number</label><input  type="text" style="width: 60%;"  placeholder="Serial Number" name="sn" class="box-input">
      <label>Aktiva  </label><input type="text" style="width: 40%;"  placeholder="Aktiva" name="aktiva" class="box-input">
      <label>Type</label>
          <select name="type" style="width: 50%;" class="box-input" >
              <option value="">-Pilih Type-</option>
              <option>MC32 NO</option>
              <option>MC32 GUN</option>
          </select>
        <label>Posisi</label>
          <select   name="posisi" style="width: 25%;" class="box-input">
              <option value="  " >-Pilih Posisi-</option>
              <option value="Support">Support</option>
              <option value="Loading">Loading</option>
              <option value="KL Fraction">KL Fraction</option>
              <option value="Bulky Fraction">Bulky</option>
              <option value="Receiving">Receiving</option>
              <option value="HO/Supplier">HO/Supplier</option>
          </select>
          <label>Status</label>
            <div class="btn-radio">
            <input type="checkbox" name="status" value="Aktif"><span>Aktif</span><br/>
            <input type="checkbox" name="status" value="Rusak"><span>Rusak</span><br/>
            <input type="checkbox" name="status" value="Service"><span>Service</span><br/>
            <input type="checkbox" name="status" value="Cadangan"><span>Cadangan</span><br/>
            </div>
          <label>Tahun Perolehan</label><input type="text" placeholder="Tahun Perolehan (Y-M-D)" name="tahun_p" style="width: 35%;" class="box-input" ><br>
          <label>Biaya Pendapatan</label><input type="text"   placeholder="Biaya Pendapatan" name="biaya_p" style="width: 35%;" class="box-input">
          <label>Nilai Aktiva</label><input type="text"  placeholder="Nilai Aktiva" name="nilai_p" style="width: 35%;" class="box-input" >
          <label>IP Handheld</label><input type="text"   name="ip"  placeholder="IP Handheld" class="box-input">
          <label>Tanggal Update</label><input type="text" id="datetime"   name="tgl_update"  placeholder="Tanggal Update" class="box-input">
          <label>Keterangan Handheld</label><textarea class="box-input" style="width: 60%;"  placeholder="Keterangan" name="ket" ></textarea><br><br>
          <div class="tambah"><button onclick="swal" type="submit" class="btn btn-primary btn-sm" value="Simpan" name="simpan">Simpan <a class="fa fa-check"></a></button>
          </div>
  	 </form>
<?php
include 'upload-hh.php';
?>
<a href="index-handheld.php"><button  type="submit" class="back btn btn-success btn-sm ">Kembali <i class="fa fa-arrow-left"></i></button></a>
    </div>
</body>

</table>
</div>

				<!-- date timepicker-->
				<script>
				$("#datetime").datetimepicker();
				</script>
</div>
</body>
<!--Footer-->

<?php
include 'footer.php';
?>
</html>