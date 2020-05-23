<?php
include 'header.php';
include 'get_id.php';
$data= new Get_ID();
?>

<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Office / Printer </span>
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
<div id="container">
<script>
  function buka_print(){
  window.open('data-printer.php' ,'' ,'menubar=yes','resizeable=yes','height=480px','width=600px');
}
</script>
  <div class="box-header">
    <h5>Master Data Printer</h5>
  <div class="box-pinjam" style="position: absolute;left: -1px;"><br>
    <a href="add-printer.php" target="_new"><button class="btn btn-default btn-sm">Entri Data <i class="fa fa-plus"></i></button></a>
    <a href="data-printer.php" target="_new"><button class="btn btn-default btn-sm">Print <i class="fa fa-print"></i></button></a>
    <a href="javascript:buka_print()"><button class="btn btn-default btn-sm">Excel <i class="fa fa-file-excel"></i></button></a>

<a href='#upload_modal' data-id=<?php echo $data->Ambil_id();?> data-toggle='modal'><button class="btn btn-default btn-sm">Upload <i class="fa fa-upload"></i></button></a>


                               <table class="table-responsive" width="100%" id="dataTables" >
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Merk</th>
                                            <th rowspan="2">Tipe</th>
                                            <th colspan="3">Detail</th>
                                            <th colspan="3">Rincian</th>                                            
                                            <th rowspan="2">Status</th>
                                            <th rowspan="2">Posisi</th>
                                            <th rowspan="2">Tanggal Update</th>
                                            <th width="8%" rowspan="2">Opsi</th>
                                        </tr>
                                          <tr>
                                            <th>Serial Number</th>
                                            <th>Aktiva</th>
                                            <th>Kode Unit</th>
                                            <th>Tahun Perolehan</th>
                                            <th>Biaya Pendapatan</th>
                                            <th>Nilai Aktiva</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                    <?php
                      include 'koneksi/koneksi.php';
                  function rupiah($angka){
                    $hasil = "Rp." . number_format($angka ,2, ',',',');
                    return $hasil;
                  }
                      $result = mysqli_query($koneksi, "SELECT * FROM printer ORDER BY id ");
                      while($row = mysqli_fetch_array($result)) {?>
                                        <tr class="">
                                            <td><?php echo $row['merk'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <td><?php echo $row['sn'];?></td>
                                            <td><?php echo $row['aktiva'];?></td>
                                            <td><?php echo $row['kode'];?></td>
                                            <td><?php echo $row['tahun_p'];?></td>
                                            <td><?php echo rupiah($row['biaya_p']);?></td>
                                            <td><?php echo rupiah($row['nilai_aktiva']);?></td>
                                            <td><?php 
                                                  if ($row['status']=='Rusak') {
                                                      echo "<div class='label-danger' >" .$row['status']. "</div>";
                                                  }else{
                                                    if ($row['status']=='Cadangan') {
                                                      echo "<div class='label-warning' >" .$row['status']. "</div>";
                                                    }elseif($row['status']=='Service'){
                                                        echo "<div class='label-info' >" .$row['status']. "</div>";
                                                    }elseif ($row['status']=='Aktif') {
                                                      echo "<div class='label-success' >" .$row['status']. "</div>";
                                                    }
                                                  }
                                                ?></td>
                                            <td><?php echo $row['posisi'];?></td>
                                            <td><?php echo $row['tgl_update'];?></td>
                                            <td><a href='#hapus_modal'  style='padding:2px;align-items:center; width:50px;font-size:12px;' data-id=<?=$row['id']?>; data-toggle='modal'><i style="font-size: 16px; color:#26ab37; " class='fa fa-trash-alt'></i></a> / 
                                            <?php echo "<a href='#edit_modal'  style='padding:2px;align-items:center; width:50px;font-size:18px;'' data-toggle='modal' data-id=".$row['id']."><i class='fab fa-twitch'></i> </a></td>"; ?></td>
                                        </tr>
                    <?php }?>
                                    </tbody>
                                </table>
        <div class="informasi">
          <label style="letter-spacing: .2em;">Informasi  : </label>
          <!--Grafik Untuk printer Cadangan-->
            <?php $data = "SELECT * FROM printer WHERE status='cadangan'";
            $r = mysqli_query($koneksi,$data);
            $count_cadangan = mysqli_num_rows($r);
            $count_3 = mysqli_num_rows($r);
            $batas = 60;
              if ($count_cadangan>=$batas) {
                $count_cadangan = 60;
              }else{
                $count_cadangan = $count_cadangan;
              }
            ?>
          <div style="position: relative;top: -29px;left: 60px; width:<?= $batas ?>%">
          <button class="btn btn-warning btn-sm" style="width: <?= $count_cadangan."%"?>" ></button><span> <?= $count_3 ?></span> 
          </div>


          <!--Grafik Untuk printer Rusak-->
            <?php $data = "SELECT * FROM printer WHERE status='rusak'";
            $r = mysqli_query($koneksi,$data);
            $count_rusak = mysqli_num_rows($r);
            $count_2 = mysqli_num_rows($r);
            $batas = 60;
              if ($count_rusak>=$batas) {
                $count_rusak = 60;
              }else{
                $count_rusak = $count_rusak;
              }
            ?>
          <div style="position: relative;top: -25px;left: 60px;width:<?= $batas ?>%">
          <button class="btn btn-danger btn-sm" style="width: <?= $count_rusak."%"?>" ></button><span> <?= $count_2 ?></span> 
          </div>


          <!--Grafik Untuk printer Service-->
            <?php $data = "SELECT * FROM printer WHERE status='service'";
            $r = mysqli_query($koneksi,$data);
            $count_service = mysqli_num_rows($r);
            $count_2 = mysqli_num_rows($r);
            $batas = 60;
              if ($count_service>=$batas) {
                $count_service = 60;
              }else{
                $count_service = $count_service;
              }
            ?> 
          <div style="position: relative;top: -20px;left: 60px;width:<?= $batas ?>% ">
          <button class="btn btn-info btn-sm" style="width: <?= $count_service."%"?>"></button><span> <?= $count_2 ?></span>
          </div>


          <!--Grafik Untuk printer Aktif-->
            <?php $data = "SELECT * FROM printer WHERE status='aktif'";
            $r = mysqli_query($koneksi,$data);
            $count_r = mysqli_num_rows($r);
            $count_2 = mysqli_num_rows($r);
            $batas = 60;
              if ($count_r>=$batas) {
                $count_r = 60;
              }else{
                $count_r = $count_r;
              }
            ?>             
          <div style="position: relative;top: -18px;left: 60px;width:<?= $batas ?>%">
          <button class="btn btn-success btn-sm" style="width: <?= $count_r."%" ?>"></button><span> <?= $count_2 ?></span>
          </div>
        </div>

  </div>
 </div>
<!--Pagination -->
    <script src="js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="pagination/js/jquery.dataTables.js"></script>
    <script src="pagination/js/dataTables.bootstrap.js"></script>
    <ul class="pagination" style="positin:absolute;margin-left:90%; margin-top:6.5px;">
    <script>

            $(document).ready(function () {
                $('#dataTables').dataTable();
            });
    </script>
    </ul>

                            </div>
                         </div>  
                        </div>
                      </div>
                    </div>
<!--Modal Edit -->

   <!--Modal Edit -->
    <div class="modal fade" id="edit_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Printer</h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>

<!--Data Hapus Modaal Bootstrap-->
   <!--Modal Hapus -->
    <div class="modal fade" id="hapus_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div style="position: relative; top: 120px;width: 350px;left: 140px;" class="modal-content">
                <div class="modal-body">
                    <div class="hasil-data"></div>
                </div>
            </div>
        </div>
    </div>

  <script src="../js/jquery.min.js"></script>
   <!--Modal Edit -->
  <script type="text/javascript">
/*Function Untuk Modal Edit Bootstrap*/
    $(document).ready(function(){
        $('#edit_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail-printer.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>


   <!--Modal Hapus -->
  <script type="text/javascript">
/*Function Untuk Modal Edit Bootstrap*/
    $(document).ready(function(){
        $('#hapus_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'hapus-modal-printer.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>



    <div class="modal fade" id="upload_modal" role="dialog" style="">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Data Monitor</h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>



<!--Modal Upload Data Monitor-->
  <script type="text/javascript">
/*Function Untuk Modal Upload*/
    $(document).ready(function(){
        $('#upload_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'upload-csv-printer.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>



</body>
<!--Footer-->

<?php
include 'footer.php';
?>
</html>