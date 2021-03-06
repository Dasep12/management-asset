<?php
include 'header.php';
include 'get_id.php';
$data= new Get_ID();

?>
<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Master Unit CPU</span>
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
  <div class="box-header">
    <h5>Master Data komputer</h5>
<script>
  function buka_print(){
  window.open('data-pc.php' ,'' ,'menubar=yes','resizeabel=yes','height=480px','width=600px');
}
</script>
  <div class="box-pinjam" style="position: absolute;left: -1px;"><br>
    <a href="add-pc.php" target="_new"><button class="btn btn-default btn-sm">Entri Data <i class="fa fa-plus"></i></button></a>
    <a href="javascript:buka_print()"><button class="btn btn-default btn-sm">Print <i class="fa fa-print"></i></button></a>
    <a href="export-pc.php" target="_new"><button class="btn btn-default btn-sm">Excel <i class="fa fa-file-excel"></i></button></a>

    <a href='#upload_modal' data-id=<?php echo $data->Ambil_id();?> data-toggle='modal'><button class="btn btn-default btn-sm">Upload <i class="fa fa-upload"></i></button></a>


                                <table width="100%" class="table-hover" id="dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th rowspan="2" >Merk</th>
                                            <th colspan="2">Detail</th>
                                            <th colspan="2"  >Spesifikasi</th>
                                            <th colspan="2"> Info </th>
                                            <th rowspan="2" width="8%">Status</th>
                                            <th rowspan="2">Opsi</th>
                                        </tr>
                                      <tr>
                                        <th >Serial Number</th>
                                        <th >Aktiva</th>
                                        <th>RAM</th>
                                        <th>Procesor</th>
                                        <th>Posisi</th>
                                        <th>IP</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                    <?php
                      include 'koneksi/koneksi.php';
                      $result = mysqli_query($koneksi, "SELECT * FROM komputer ");
                      while($row = mysqli_fetch_array($result)) {?>
                                        <tr class="">
                                            <td><?php echo $row['merk'];?></td>
                                            <td><?php echo $row['sn'];?></td>
                                            <td><?php echo $row['aktiva'];?></td>
                                            <td><?php echo $row['procesor'];?></td>
                                            <td><?php echo $row['ram'];?></td>
                                            <td><?php echo $row['posisi'];?></td>
                                            <td><?php echo $row['ip'];?></td>
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
                                                ?>
                                              </td>
                                            <td><a href='#hapus_modal'  style='padding:2px;align-items:center; width:50px;' data-id=<?=$row['id']?>; data-toggle='modal'><i class="fa fa-trash"></i></a> / 
                                            <?php echo "<a href='#edit_modal'  style='padding:2px;align-items:center; width:50px;font-size:16px;'' data-toggle='modal' data-id=".$row['id']."><i class='fa fa-edit'></i> </a></td>"; ?></td>
                                        </tr>
                    <?php }?>
                                    </tbody>
                                </table>
        <div class="informasi">
          <label style="letter-spacing: .2em;">Informasi  : </label>
          <!--Grafik Untuk komputer Cadangan-->
            <?php $data = "SELECT * FROM komputer WHERE status='cadangan'";
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


          <!--Grafik Untuk komputer Rusak-->
            <?php $data = "SELECT * FROM komputer WHERE status='rusak'";
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


          <!--Grafik Untuk komputer Service-->
            <?php $data = "SELECT * FROM komputer WHERE status='service'";
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


          <!--Grafik Untuk komputer Aktif-->
            <?php $data = "SELECT * FROM komputer WHERE status='aktif'";
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

    <script src="js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <ul class="pagination" style="positin:absolute;margin-left:90%; margin-top:6.5px;">
    <script>

            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    </ul>

                            </div>
                         </div>  
                        </div>
                      </div>
                    </div>
   
    <div class="modal fade" id="edit_modal" role="dialog" style="">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Komputer</h4>
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

  <script src="../js/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#edit_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail-komputer.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>

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




   <!--Modal Hapus -->
  <script type="text/javascript">
/*Function Untuk Modal Edit Bootstrap*/
    $(document).ready(function(){
        $('#hapus_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'hapus-modal-cpu.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>


<!--Modal Upload Data Komputer-->


    <div class="modal fade" id="upload_modal" role="dialog" style="">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Upload Data Komputer</h4>
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



<!--Modal Upload Data Komputer-->
  <script type="text/javascript">
/*Function Untuk Modal Upload*/
    $(document).ready(function(){
        $('#upload_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'upload-csv-komputer.php',
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