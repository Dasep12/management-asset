<?php
include 'header.php';

?>
<nav class="tanggal" style="margin-top: -12px;">
<span><i class="fa fa-home"></i> Beranda / DC / Handheld</span>
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

<div id="container"><br>
    <div class="menu-ribbon" style="position: relative;top: 7px;margin-bottom: 30px;"><br>
    <a href="tambah-labelSR.php" class="btn btn-default">Tambah Stock <i class="fa fa-cart-plus"></i></a>
    <a href="stock-stiker-ribbon.php" class="btn btn-default">Saldo Stock <i class="fab fa-gitlab"></i></a>
    <a href="input-manual-stiker.php" class="btn btn-default">Entri (Manual) <i class="fa fa-plus"></i></a>
    <a href="history.php" class="btn btn-default active">Histori <i class="fa fa-history"></i></a>
    <a href="grafik-stiker.php" class="btn btn-default  ">Tracking Pemakaian <i class="fa fa-history"></i></a>
    </div>
  <div class="box-header" style="position: absolute;top: 190px;border:none;">
    <h5 style="border:none;">Riwayat Pemakaian</h5>
  <div class="box-pinjam" style="position: absolute;left: -1px;top: 50px; height: 500px; border-top: none;">
                                <table class="table-responsive" width="100%" id="dataTables" >
                                    <thead>
                                        <tr>
                                        <th >Kode</th>
                                        <th >Penginput</th>
                                        <th >Zona</th>
                                        <th >Tanggal & Jam</th>
                                        <th >Keterangan</th>
                                        </tr>
                                  </thead>
                                <tbody>
                    <?php
                    include ('koneksi/koneksi.php');
                  
                      $result = mysqli_query($koneksi, "SELECT * FROM penggunaan ORDER BY tanggal");
                      while($row = mysqli_fetch_array($result)) {?>
                                        <tr class="">
                                            <td width="15%"><div style="width: 80%;text-align: center;margin-left: 15px;margin-bottom: 3px;" class="label-info"><?php echo $row['kode'];?></div></td>
                                            <td><?php echo $row['user'];?></td>
                                            <td><?php echo $row['zona'];?></td>
                                            <td><?php echo $row['tanggal'];?></td>
                                            <td><?php echo $row['ket'];?></td>
                                        </tr>
                    <?php }?>
                                    </tbody>
                                </table>


  </div>
 </div>
<!--Pagination -->
    <script src="js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <ul class="pagination" style="positin:absolute;margin-left:90%; margin-top:6.5px;">
    <script>

            $(document).ready(function () {
                $('#dataTables').dataTable();
            });
    </script>


  
</body>
<!--Footer-->

<?php
include 'footer.php';
?>
</html>