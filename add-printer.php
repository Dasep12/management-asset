<?php
include 'header.php';
?>
<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Printer / Add Printer</span>
 <li>
<?php
  include 'waktu.php';
?>
<div class="waktu">
<div class="wib"></div><div class="hari" id="output"></div>
</div>
 </li>
</nav>
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
    <h5>Entri Data Printer</h5>
    </div>
    <div class="box-add">
      <form name="datetimepicker" action="" method="POST">
      <label>Merk</label> <input type="text" style="width: 15%;"  class="box-input" placeholder="Merk" name="merk" >
      <label>Serial Number</label><input type="text" style="width: 30%;"  class="box-input" placeholder="Serial Number" name="sn" >
      <label>Aktiva</label><input type="text" style="width: 18%;"  class="box-input" placeholder="Aktiva" name="aktiva" >
      <label>Kode Unit</label><input type="text" style="width: 11%;"  class="box-input" placeholder="Kode Unit" name="kode" >
      <label>Tipe</label>
        <select name="type" class="box-input"   >
        <option value="">-Pilih Type Printer-</option>
        <option value="Epson LQ2190">Epson LQ2190</option>
        <option value="Epson L120">Epson L120</option>
        <option value="Epson L210">Epson L210</option>
        <option value="HP LaserJet">HP LaserJet</option>
        </select>
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
      <label>Tahun Perolehan</label><input style="width: 35%;" type="text"  class="box-input" placeholder="Tahun Perolehan" name="tahun_p" ><span style="position: absolute;left: 600px;z-index: 9999;top: 68%;"><i>* format (yyyy-mm-ddd) *</i></span>
      <label>Biaya Pendapatan</label><input type="text" style="width: 35%;" class="box-input" placeholder="Biaya Pendapatan" name="biaya_p" ><span style="position: absolute;left: 600px;z-index: 9999;top: 75%;"><i>* input tanpa titik dan koma *</i></span>
      <label>Nilai Aktiva</label><input type="text" style="width: 35%;"  class="box-input" placeholder="Nilai Aktiva" name="nilai_aktiva" ><span style="position: absolute;left: 600px;z-index: 9999;top: 83%;"><i>* input tanpa titik dan koma *</i></span>
      <label>Tanggal Update</label><input type="text" id="datetime" style="width: 35%;" class="box-input" name="tgl_update"  placeholder="Tanggal"><span style="position: absolute;left: 600px;z-index: 9999;top: 91%;"><i>* format (yyyy-mm-ddd) *</i></span>
      <label>Keterangan</label><textarea  style="width: 60%;" class="box-input" placeholder="Keterangan" name="ket" ></textarea>
          <div class="tambah"><button type="submit" class="btn btn-primary btn-sm" value="Simpan" name="simpan">Simpan <a class="fa fa-check"></a></button>
          </div>
     </form>
<?php
  include 'upload-printer.php';
?>
<a href="index-printer.php"><button  type="submit" class="back btn btn-success btn-sm ">Kembali <i class="fa fa-arrow-left"></i></button></a>
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