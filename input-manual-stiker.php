<?php
include 'header.php';
?>
<nav class="tanggal" style="margin-top: -12px;">
<span><marquee direction="left">Pemakaian Stiker Ribbon</marquee></span>
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
    <div class="menu-ribbon">
    <a href="tambah-labelSR.php" class="btn btn-default">Tambah Stock <i class="fa fa-cart-plus"></i></a>
    <a href="stock-stiker-ribbon.php" class="btn btn-default">Saldo Stock <i class="fab fa-gitlab"></i></a>
    <a href="input-manual-stiker.php" class="btn btn-default active">Entri (Manual) <i class="fa fa-plus"></i></a>
    <a href="history.php" class="btn btn-default">Histori <i class="fa fa-history"></i></a>
    <a href="grafik-stiker.php" class="btn btn-default  ">Tracking Pemakaian <i class="fa fa-history"></i></a>
    </div>
  <div class="box-header" style="position: absolute;top: 190px;border-top: none;">
    <h5>Entri Stiker Ribbon (Manual)</h5>
    </div><br>
    <div class="box-add">
<form action="" method="POST">
        <label>Pilih Zona</label><select name="zona" style="width: 50%;" class="box-input">
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
      <input type="hidden" name="id_barang" value="1">
      <label>Stiker</label><input type="text" placeholder="isi 0 jika tak ada pergantian" class="box-input" name="stiker" style="width: 50%;" >
      <label>Ribbon</label><input type="text" placeholder="isi 0 jika tak ada pergantian" class="box-input" name="ribbon" style="width: 50%;">
      <label>Tanggal Pergantian</label><input type="text"  class="box-input" style="width: 50%;" value="<?php echo  date('Y-m-d');?>" width="50%" name="tanggal" placeholder="Tanggal" id="datetime"></tr>
      <label>Keterangan</label><textarea name="ket" style="width: 50%;" class="box-input" placeholder="Isi Jika Ada"></textarea>
        <button type="submit" class="btn btn-primary btn-sm" style="width: 50%;position: relative;left: 200px;top: 40px;" value="Simpan" name="simpan">Simpan <a class="glyphicon glyphicon-send"></a></button> 
      <input type="hidden" name="user"  >
      <input type="hidden" name="kode" value="SR1265EF65">  
     </form>
<?php
  include 'upload-manual-stiker.php';
?>




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