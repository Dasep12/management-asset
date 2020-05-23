<?php
include 'header.php';
?>

<nav class="tanggal" style="margin-top: -12px;">
<span><marquee direction="left">Tambah Data vehicle</marquee></span>
 <li>
<?php
include 'waktu.php';
?>
<div class="waktu">
<div class="wib"></div><div class="hari" id="output"></div>
</div>
 </li>
</nav>

<?php
include 'sidebar.php';

?>
             <!-- Calender -->
    <link rel="stylesheet" type="text/css" href="calender/jquery.datetimepicker.min.css">
    <script type="text/javascript" src="calender/jquery.js"></script>
    <script type="text/javascript" src="calender/jquery.datetimepicker.full.js"></script>


<div id="container">
  <div class="box-header">
    <h5>Entri Data Vehicle</h5>
    </div>
    <div class="box-add">
      <form name="datetimepicker" action="" method="POST">
      <label>Merk</label><input type="text" class="box-input"  placeholder="Merk" name="merk" >
      <label>Kode Unit</label><input type="text" placeholder="Kode Unit" name="kode" class="box-input">
      <label>Serial Number</label><input  type="text" style="width: 60%;"  placeholder="Serial Number" name="sn" class="box-input">
      <label>Aktiva  </label><input type="text" style="width: 40%;"  placeholder="Aktiva" name="aktiva" class="box-input">
      <label>Type</label><input type="text" name="type" class="box-input" placeholder="Tipe Vehicle">
        <label>Posisi</label>
        <select  style="width: 25%" name="posisi" class="box-input">
          <option value=" " >-Pilih Posisi-</option>
          <option>Support</option>
          <option>HO/Supplier</option>
          <option>Forklift A</option>
          <option>Forklift B</option>
          <option>Forklift C</option>
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
          <label>Tanggal Update</label><input type="text" id="datetime"   name="tgl_update"  placeholder="Tanggal Update" class="box-input">
          <label>Keterangan vehicle</label><textarea class="box-input" style="width: 60%;"  placeholder="Keterangan" name="ket" ></textarea><br><br>
          <div class="tambah"><button onclick="swal" type="submit" class="btn btn-primary btn-sm" value="Simpan" name="simpan">Simpan <a class="fa fa-check"></a></button>
          </div>
     </form>
<?php
include 'upload-vehicle.php';
?>
<a href="index-vehicle.php"><button  type="submit" class="back btn btn-success btn-sm ">Kembali <i class="fa fa-arrow-left"></i></button></a>
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