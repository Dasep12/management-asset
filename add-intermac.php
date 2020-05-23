<?php
include 'header.php';
?>

<nav class="tanggal" style="margin-top: -12px;">
<span>Tambah Data Intermac</span>
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
    <h5>Entri Data Intermac</h5>
    </div>
    <div class="box-add">
      <form name="datetimepicker" action="" method="POST">
      <label>Merk</label> <input type="text" style="width: 15%;"  class="box-input" placeholder="Merk" name="merk" >
      <label>Serial Number</label><input type="text" style="width: 30%;"  class="box-input" placeholder="Serial Number" name="sn" >
      <label>Aktiva</label><input type="text" style="width: 18%;"  class="box-input" placeholder="Aktiva" name="aktiva" >
      <label>Kode Unit</label><input type="text" style="width: 11%;"  class="box-input" placeholder="Kode Unit" name="kode" >
      <label>Tipe Intermac</label><input type="text" style="width: 15%" name="type" class="box-input" placeholder="Tipe Printer">
      <label>Posisi</label>
        <select  style="width: 25%"  name="posisi" class="box-input">
          <option value="  " >-Pilih Posisi-</option>
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
          <option value="Support">Support</option>
          <option value="HO/Supplier">HO/Supplier</option>
        </select>
        <label>IP </label><input type="text"  class="box-input" name="ip"  style="width: 25%;" placeholder="IP Intermac">
          <label>Status</label>
            <div class="btn-radio">
            <input type="checkbox" name="status" value="Aktif"><span>Aktif</span><br/>
            <input type="checkbox" name="status" value="Rusak"><span>Rusak</span><br/>
            <input type="checkbox" name="status" value="Service"><span>Service</span><br/>
            <input type="checkbox" name="status" value="Cadangan"><span>Cadangan</span><br/>
            </div>
      <label>Tahun Perolehan</label><input style="width: 35%;" type="text"  class="box-input" placeholder="Tahun Perolehan" name="tahun_p" ><span style="position: absolute;left: 600px;z-index: 9999;top: 75.8%;"><i>* format (yyyy-mm-ddd) *</i></span>
      <label>Biaya Pendapatan</label><input type="text" style="width: 35%;" class="box-input" placeholder="Biaya Pendapatan" name="biaya_p" ><span style="position: absolute;left: 600px;z-index: 9999;top: 83.5%;"><i>* input tanpa titik dan koma *</i></span>
      <label>Nilai Aktiva</label><input type="text" style="width: 35%;"  class="box-input" placeholder="Nilai Aktiva" name="nilai_p" ><span style="position: absolute;left: 600px;z-index: 9999;top: 91%;"><i>* input tanpa titik dan koma *</i></span>
      <label>Tanggal Update</label><input type="text" id="datetime" style="width: 35%;" class="box-input" name="tgl_update"  placeholder="Tanggal"><span style="position: absolute;left: 600px;z-index: 9999;top: 98.6%;"><i>* format (yyyy-mm-ddd) *</i></span>
      <label>Keterangan</label><textarea  style="width: 60%;" class="box-input" placeholder="Keterangan" name="ket" ></textarea>
          <div class="tambah"><button type="submit" class="btn btn-primary btn-sm" value="Simpan" name="simpan">Simpan <a class="fa fa-check"></a></button>
          </div>
     </form>
<?php
  include 'upload-intermac.php';
?>
<a href="index-intermac.php"><button  type="submit" class="back btn btn-success btn-sm ">Kembali <i class="fa fa-arrow-left"></i></button></a>
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