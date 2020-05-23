

<div class="grafik">

<div class="grafik-info">
<li><a class="btn btn-danger">Stiker</a></li>
<li><a class="btn btn-warning">Ribbon</a></li>
</div>
<div class="bulan">
<li>Januari</li>
<?php
  include 'koneksi/koneksi.php';
  $tanggal = date('Y-01');
  $batas = 90;
  $qry =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $qry2 =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $row =mysqli_fetch_array($qry);
  $row2 =mysqli_fetch_array($qry2);
    if ($row['SUM(stiker)']>$batas || $row['SUM(ribbon)']>$batas )  {
        $row['SUM(stiker)'] = $batas;
        $row['SUM(ribbon)'] = $batas;
         ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php }else{ ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php  }

?>
</div>

<div class="bulan">
<li>Februari</li>
<?php
  include 'koneksi/koneksi.php';
  $tanggal = date('Y-02');
  $batas = 90;
  $qry =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $qry2 =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $row =mysqli_fetch_array($qry);
  $row2 =mysqli_fetch_array($qry2);
    if ($row['SUM(stiker)']>$batas || $row['SUM(ribbon)']>$batas )  {
        $row['SUM(stiker)'] = $batas;
        $row['SUM(ribbon)'] = $batas;
         ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php }else{ ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php  }

?>
</div>


<div class="bulan">
<li>Maret</li>
<?php
  include 'koneksi/koneksi.php';
  $tanggal = date('Y-03');
  $batas = 90;
  $qry =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $qry2 =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $row =mysqli_fetch_array($qry);
  $row2 =mysqli_fetch_array($qry2);
    if ($row['SUM(stiker)']>$batas || $row['SUM(ribbon)']>$batas )  {
        $row['SUM(stiker)'] = $batas;
        $row['SUM(ribbon)'] = $batas;
         ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php }else{ ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php  }

?>
</div>


<div class="bulan">
<li>April</li>
<?php
  include 'koneksi/koneksi.php';
  $tanggal = date('Y-04');
  $batas = 90;
  $qry =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $qry2 =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $row =mysqli_fetch_array($qry);
  $row2 =mysqli_fetch_array($qry2);
    if ($row['SUM(stiker)']>$batas || $row['SUM(ribbon)']>$batas )  {
        $row['SUM(stiker)'] = $batas;
        $row['SUM(ribbon)'] = $batas;
         ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php }else{ ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php  }

?>
</div>

<div class="bulan">
<li>Mei</li>
<?php
  include 'koneksi/koneksi.php';
  $tanggal = date('Y-05');
  $batas = 90;
  $qry =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $qry2 =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $row =mysqli_fetch_array($qry);
  $row2 =mysqli_fetch_array($qry2);
    if ($row['SUM(stiker)']>$batas || $row['SUM(ribbon)']>$batas )  {
        $row['SUM(stiker)'] = $batas;
        $row['SUM(ribbon)'] = $batas;
         ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php }else{ ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php  }

?>
</div>

<div class="bulan">
<li>Juni</li>
<?php
  include 'koneksi/koneksi.php';
  $tanggal = date('Y-06');
  $batas = 90;
  $qry =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $qry2 =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $row =mysqli_fetch_array($qry);
  $row2 =mysqli_fetch_array($qry2);
    if ($row['SUM(stiker)']>$batas || $row['SUM(ribbon)']>$batas )  {
        $row['SUM(stiker)'] = $batas;
        $row['SUM(ribbon)'] = $batas;
         ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php }else{ ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php  }

?>
</div>

<div class="bulan">
<li>Juli</li>
<?php
  include 'koneksi/koneksi.php';
  $tanggal = date('Y-07');
  $batas = 90;
  $qry =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $qry2 =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $row =mysqli_fetch_array($qry);
  $row2 =mysqli_fetch_array($qry2);
    if ($row['SUM(stiker)']>$batas || $row['SUM(ribbon)']>$batas )  {
        $row['SUM(stiker)'] = $batas;
        $row['SUM(ribbon)'] = $batas;
         ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php }else{ ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php  }

?>
</div>

<div class="bulan">
<li>Agustus</li>
<?php
  include 'koneksi/koneksi.php';
  $tanggal = date('Y-08');
  $batas = 90;
  $qry =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $qry2 =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $row =mysqli_fetch_array($qry);
  $row2 =mysqli_fetch_array($qry2);
    if ($row['SUM(stiker)']>$batas || $row['SUM(ribbon)']>$batas )  {
        $row['SUM(stiker)'] = $batas;
        $row['SUM(ribbon)'] = $batas;
         ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php }else{ ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php  }

?>
</div>

<div class="bulan">
<li>September</li>
<?php
  include 'koneksi/koneksi.php';
  $tanggal = date('Y-09');
  $batas = 90;
  $qry =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $qry2 =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $row =mysqli_fetch_array($qry);
  $row2 =mysqli_fetch_array($qry2);
    if ($row['SUM(stiker)']>$batas || $row['SUM(ribbon)']>$batas )  {
        $row['SUM(stiker)'] = $batas;
        $row['SUM(ribbon)'] = $batas;
         ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php }else{ ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php  }

?>
</div>

<div class="bulan">
<li>Oktober</li>
<?php
  include 'koneksi/koneksi.php';
  $tanggal = date('Y-10');
  $batas = 90;
  $qry =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $qry2 =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $row =mysqli_fetch_array($qry);
  $row2 =mysqli_fetch_array($qry2);
    if ($row['SUM(stiker)']>$batas || $row['SUM(ribbon)']>$batas )  {
        $row['SUM(stiker)'] = $batas;
        $row['SUM(ribbon)'] = $batas;
         ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php }else{ ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php  }

?>
</div>

<div class="bulan">
<li>November</li>
<?php
  include 'koneksi/koneksi.php';
  $tanggal = date('Y-10');
  $batas = 90;
  $qry =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $qry2 =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $row =mysqli_fetch_array($qry);
  $row2 =mysqli_fetch_array($qry2);
    if ($row['SUM(stiker)']>$batas || $row['SUM(ribbon)']>$batas )  {
        $row['SUM(stiker)'] = $batas;
        $row['SUM(ribbon)'] = $batas;
         ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php }else{ ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php  }

?>
</div>

<div class="bulan">
<li>Desember</li>
<?php
  include 'koneksi/koneksi.php';
  $tanggal = date('Y-12');
  $batas = 90;
  $qry =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $qry2 =mysqli_query($koneksi,"SELECT kode, SUM(stiker),SUM(ribbon) FROM penggunaan WHERE bulan='$tanggal'");
  $row =mysqli_fetch_array($qry);
  $row2 =mysqli_fetch_array($qry2);
    if ($row['SUM(stiker)']>$batas || $row['SUM(ribbon)']>$batas )  {
        $row['SUM(stiker)'] = $batas;
        $row['SUM(ribbon)'] = $batas;
         ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php }else{ ?>
        <a class="btn btn-danger" style="width: <?=$row['SUM(stiker)']?>%"></a><span><?=$row2['SUM(stiker)']?><br>
        <a class="btn btn-warning" style="width: <?=$row['SUM(ribbon)']?>%"></a><span><?=$row2['SUM(ribbon)']?></span>
<?php  }

?>
</div>


</div>