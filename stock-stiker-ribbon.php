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
    <a href="stock-stiker-ribbon.php" class="btn btn-default active">Saldo Stock <i class="fab fa-gitlab"></i></a>
    <a href="input-manual-stiker.php" class="btn btn-default">Entri (Manual) <i class="fa fa-plus"></i></a>
    <a href="history.php" class="btn btn-default">Histori <i class="fa fa-history"></i></a>
    <a href="grafik-stiker.php" class="btn btn-default  ">Tracking Pemakaian <i class="fa fa-history"></i></a>
    </div>
  <div class="box-header" style="position: absolute;top: 190px;border-top: none;">
    <h5>Stock Stiker Ribbon</h5>
    </div><br>
    <div class="box-add">
<table class="table-1" width="100%" >
<thead>
  <tr>
      <th>Label Barang</th>
      <th>Sisa Stock</th>
      <th>Estimasi Penggunaan</th>
      <th>Penggunaan Kemarin</th>
      <th>Penggunaan Hari ini</th>
  </tr>
</thead>
       <tbody>
            <?php
            include 'koneksi/koneksi.php';
              $tgl = mktime(0,0,0 ,date("m") , date("d")-1 , date("y"));
              $hari = date("Y-m-d", $tgl);
              $know = date("Y-m-d");
              $query = mysqli_query($koneksi,"SELECT kode,SUM(stiker) FROM penggunaan WHERE tanggal='$tgl'");
              $qry = mysqli_fetch_array($query);
              $data = mysqli_query($koneksi,"SELECT * FROM barang");
              $r = mysqli_query($koneksi,"SELECT * FROM pembelian");

              $ca = mysqli_fetch_array($r);
              while ($row = mysqli_fetch_array($data)) { ?>
                <td>Stiker</td>
                <td><?=$row['stiker']?></td>
                <td bgcolor="#75ab65"><?=$row['stiker']/5 .' Hari'?></td>
                <td bgcolor="#75ab65">
                <?php
                $query = "SELECT kode,SUM(stiker),SUM(ribbon) FROM penggunaan WHERE tanggal='$hari'";
                $qry = mysqli_query($koneksi,$query);
                  $row12=mysqli_fetch_array($qry) ;
                  echo $row12['SUM(stiker)'];
                ?>
                </td>
                <td bgcolor="#75ab65">
                <?php
                $query = "SELECT kode,SUM(stiker),SUM(ribbon) FROM penggunaan WHERE tanggal='$know'";
                $qry = mysqli_query($koneksi,$query);
                  $row11=mysqli_fetch_array($qry) ;
                  echo $row11['SUM(stiker)'];
                ?> 
                </td>
            <tr>
                <td>Ribbon</td>
                <td><?=$row['ribbon']?></td>
                <td bgcolor="#75ab65"><?=$row['ribbon']/5 .' Hari'?></td>
                <td bgcolor="#75ab65"><?= $row12['SUM(ribbon)']; ?></td>
                <td bgcolor="#75ab65"><?=$row11['SUM(ribbon)']?></td>
            </tr>    
              <?php }  ?>
          </tr>
     </tbody>
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