<?php
//Header
include 'header.php';
?>

<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Monitor / Add Monitor</span>
 <li>
<?php
//Jam dan Tanggal
include 'waktu.php';
?>
<div class="waktu">
<div class="wib"></div><div class="hari" id="output"></div>
</div>
 </li>
</nav>


<?php
//Sidebar
  include 'sidebar.php';
?>
             <!-- Calender -->
    <link rel="stylesheet" type="text/css" href="calender/jquery.datetimepicker.min.css">
    <script type="text/javascript" src="calender/jquery.js"></script>
    <script type="text/javascript" src="calender/jquery.datetimepicker.full.js"></script>
<div id="container">
  <div class="box-header">
    <h5>Entri Data Monitor</h5>
    </div>
    <div class="box-add">
      <form name="datetimepicker" action="" method="POST">
      <label>Merk</label> <input type="text" style="width: 15%;"  class="box-input" placeholder="Merk" name="merk" >
      <label>Serial Number</label><input type="text" style="width: 30%;"  class="box-input" placeholder="Serial Number" name="sn" >
      <label>Aktiva</label><input type="text" style="width: 18%;"  class="box-input" placeholder="Aktiva" name="aktiva" >
      <label>Ukuran</label><input type="text"  class="box-input" style="width: 22%;" placeholder="Ukuran" name="ukuran" >
      <label>Posisi</label>
        <select  style="width: 25%;" name="posisi" class="box-input">
            <option value="  " >-Pilih Posisi-</option>
            <option value="Admin Atas">Admin Atas</option>
            <option value="Admin Bawah">Admin Bawah</option>
            <option value="Retur Toko">Retur Toko</option>
            <option value="Retur Supplier">Retur Supplier</option>
            <option value="Admin Chips">Admin Chips</option>
            <option value="GA">GA</option>
            <option value="LPG">LPG</option>
            <option value="Support">Support</option>
            <option value="EDP CABANG">EDP</option>
        </select>
          <label>Status</label>
            <div class="btn-radio">
            <input type="checkbox" name="status" value="Aktif"><span>Aktif</span><br/>
            <input type="checkbox" name="status" value="Rusak"><span>Rusak</span><br/>
            <input type="checkbox" name="status" value="Service"><span>Service</span><br/>
            <input type="checkbox" name="status" value="Cadangan"><span>Cadangan</span><br/>
            </div>
      <label>Tahun Perolehan</label><input style="width: 35%;" type="text"  class="box-input" placeholder="Tahun Perolehan" name="tahun_p" ><span style="position: absolute;left: 600px;z-index: 9999;top: 61%;"><i>* format (yyyy-mm-ddd) *</i></span>
      <label>Biaya Pendapatan</label><input type="text" style="width: 35%;" class="box-input" placeholder="Biaya Pendapatan" name="biaya_p" ><span style="position: absolute;left: 600px;z-index: 9999;top: 69%;"><i>* input tanpa titik dan koma *</i></span>
      <label>Nilai Aktiva</label><input type="text" style="width: 35%;"  class="box-input" placeholder="Nilai Aktiva" name="nilai_aktiva" ><span style="position: absolute;left: 600px;z-index: 9999;top: 76%;"><i>* input tanpa titik dan koma *</i></span>
      <label>Tanggal Update</label><input type="text" id="datetime" style="width: 35%;" class="box-input" name="tgl_update"  placeholder="Tanggal"><span style="position: absolute;left: 600px;z-index: 9999;top: 84%;"><i>* format (yyyy-mm-ddd) *</i></span>
      <label>Keterangan</label><textarea  style="width: 60%;" class="box-input" placeholder="Keterangan" name="ket" ></textarea>
          <div class="tambah"><button type="submit" class="btn btn-primary btn-sm" value="Simpan" name="simpan">Simpan <a class="fa fa-check"></a></button>
          </div>
     </form>
<?php
  include 'upload-monitor.php';
?>
<a href="index-monitor.php"><button  type="submit" class="back btn btn-success btn-sm ">Kembali <i class="fa fa-arrow-left"></i></button></a>
    </div>
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