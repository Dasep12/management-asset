<?php
  include 'header.php';

?>
<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / CPU / Entri Data CPU</span>
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
    <h5>Entri Data CPU</h5>
    </div>
    <div class="box-add">
      <form name="datetimepicker" action="" method="POST">
      <label>Merk</label> <input type="text" style="width: 15%;"  class="box-input" placeholder="Merk" name="merk" >
      <label>Serial Number</label><input type="text" style="width: 30%;"  class="box-input" placeholder="Serial Number" name="sn" >
      <label>Aktiva</label><input type="text" style="width: 18%;"  class="box-input" placeholder="Aktiva" name="aktiva" >
      <label>RAM</label><input type="text"  style="width: 8%;" class="box-input" placeholder="RAM" name="ram" >
      <label>Procesor</label><input type="text" style="width: 19%;"  class="box-input" placeholder="Procesor" name="procesor" >
      <label>IP</label><input type="text"  class="box-input" style="width: 22%;" placeholder="IP" name="ip" >
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
            <select  style="width: 25%;" name="status" class="box-input">
              <option value=" ">-Pilih Status-</option>
              <option value="Aktif">Aktif</option>
              <option value="Service">Service</option>
              <option value="Cadangan">Cadangan</option>
            <option value="Rusak">Rusak</option>
      </select>
      <label>Tahun Perolehan</label><input style="width: 35%;" type="text"  class="box-input" placeholder="Tahun Perolehan" name="tahun_p" ><span style="position: absolute;left: 600px;z-index: 9999;top: 67%;"><i>* format (yyyy-mm-ddd) *</i></span>
      <label>Biaya Pendapatan</label><input type="text" style="width: 35%;" class="box-input" placeholder="Biaya Pendapatan" name="biaya_p" ><span style="position: absolute;left: 600px;z-index: 9999;top: 74.5%;"><i>* input tanpa titik dan koma *</i></span>
      <label>Nilai Aktiva</label><input type="text" style="width: 35%;"  class="box-input" placeholder="Nilai Aktiva" name="nilai_aktiva" ><span style="position: absolute;left: 600px;z-index: 9999;top: 82%;"><i>* input tanpa titik dan koma *</i></span>
      <label>Tanggal Update</label><input type="text" id="datetime" style="width: 35%;" class="box-input" name="tgl_update"  placeholder="Tanggal">
      <label>Keterangan</label><textarea  style="width: 60%;" class="box-input" placeholder="Keterangan" name="ket" ></textarea>
          <div class="tambah"><button type="submit" class="btn btn-primary btn-sm" value="Simpan" name="simpan">Simpan <a class="fa fa-check"></a></button>
          </div>
     </form>
<?php
  include 'upload-cpu.php';
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