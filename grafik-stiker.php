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
    <a href="input-manual-stiker.php" class="btn btn-default">Entri (Manual) <i class="fa fa-plus"></i></a>
    <a href="history.php" class="btn btn-default">Histori <i class="glyphicon glyphicon-remove-circle"></i></a>
    <a href="grafik-stiker.php" class="btn btn-default  active">Tracking Pemakaian <i class="fa fa-history"></i></a>
    </div>
  <div class="box-header" style="position: absolute;top: 190px;border-top: none;">
    <h5>Grafik Pemakaian Stock Stiker Ribbon <?= date('Y'); ?></h5>
    </div><br>
    <div class="box-add">

<?php
include 'grafik.php';
?>

        <!-- date timepicker-->
        <script>
        $("#datetime").datetimepicker();
        </script>
</div>
</div>
</body>
<!--Footer-->

<?php
include 'footer.php';
?>

</html>