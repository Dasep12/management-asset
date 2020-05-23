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
    <a href="tambah-labelSR.php" class="btn btn-default active">Tambah Stock <i class="fa fa-cart-plus"></i></a>
    <a href="stock-stiker-ribbon.php" class="btn btn-default">Saldo Stock <i class="fab fa-gitlab"></i></a>
    <a href="input-manual-stiker.php" class="btn btn-default">Entri (Manual) <i class="fa fa-plus"></i></a>
    <a href="history.php" class="btn btn-default">Histori <i class="fa fa-history"></i></a>
    <a href="grafik-stiker.php" class="btn btn-default  ">Tracking Pemakaian <i class="fa fa-history"></i></a>
    </div>
  <div class="box-header" style="position: absolute;top: 190px;border-top: none;">
    <h5>Entri Stock Stiker Ribbon</h5>
    </div><br>
    <div class="box-add">
      <form name="datetimepicker" action="" method="POST">
      <input type="hidden" name="id_barang" value="1">
      <input type="hidden" name="user" >
      <input type="hidden" name="kode" value="SR1265EF65">
      <input type="hidden" name="stiker" value="1"><input type="hidden" name="ribbon" value="1">
        <label>Stiker</label>
        <input type="text" class="box-input" style="width: 50%;" name="stiker" placeholder="Jumlah Stiker Baru">
        <label>Ribbon</label><input type="text" class="box-input" name="ribbon" style="width: 50%;" placeholder="Jumlah Ribbon Baru">

        <label>Tanggal</label><input type="text"  class="box-input" style="width: 50%;" name="tanggal" placeholder="Tanggal" id="datetime">
        <label>Keterangan</label><textarea name="ket" style="width: 50%;" class="box-input" placeholder="Isi Jika Ada"></textarea>
        <button type="submit" class="btn btn-primary btn-sm" style="width: 50%;position: relative;left: 200px;top: 40px;" value="Simpan" name="simpan">Simpan <a class="fa fa-check"></a></button>
     </form>
<?php
  include 'upload-stock-stiker.php';
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