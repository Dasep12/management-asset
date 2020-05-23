<?php
include 'header.php';
?>
<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Handheld / Dipinjam</span>
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
    <h5>Handheld Di Pinjam</h5>
  <div class="box-pinjam" style="position: absolute;left: -1px;"><br>
    <a href="master-pinjamHH.php" target="_new"><button class="btn btn-primary btn-xl">Peminjaman <i class="fa fa-plus"></i></button></a>
    <a href="history-pinjamHH.php" target="_new"><button class="btn btn-warning btn-xl">History <i class="fa fa-history"></i></button></a>
    <br>
                                <table class="table-bordered" border="1" width="100%" id="dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Merk</th>
                                            <th colspan="3"><b>Detail</b>   </th>
                                            <th colspan="2"><b>Waktu & Tanggal</b></th>
                                            <th rowspan="2">Status</th>
                                            <th rowspan="2">Posisi</th>
                                            <th rowspan="2">Support</th>
                                            <th rowspan="2">Peminjam</th>
                                            <th rowspan="2">Interval Hari</th>
                                            <th rowspan="2">Opsi</th>
                                        
                                    </tr>
                                        <th>Serial Number</th>
                                        <th>Aktiva</th>
                                        <th>Kode Unit</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Jam Keluar</th>

                                  </thead>
                                <tbody>
                    <?php
                    include ('koneksi/koneksi.php');
                      $result = mysqli_query($koneksi, "SELECT * FROM handheld WHERE status='dipinjamkan' ");
                      while($row = mysqli_fetch_array($result)) {?>
                                        <tr>
                                            <td>
                                                <?php 
                                                    $k = $row['tanggal_pinjam'];
                                                    $s = date('Y-m-d');
                                                    $tgl1 = new DateTime($k);
                                                    $tgl2 = new DateTime($s);
                                                    $interval = $tgl2->diff($tgl1);
                                                    $jml = $interval->format('%d');
                                                    if ($jml==0) {
                                                        echo "<div class='label-success'>Motorola</div>";
                                                    }elseif($jml<=3){
                                                        echo "<div class='label-info'>Motorola</div>";
                                                    }elseif($jml>=5 || $jml==4){
                                                        echo "<div class='label-danger'>Motorola</div>";
                                                    }
                                                ?>
                                            </td>
                                            <td><?php echo $row['sn'];?></td>
                                            <td><?php echo $row['aktiva'];?></td>
                                            <td><?php echo $row['kode'];?></td>
                                            <td><?php echo $row['tanggal_pinjam'];?></td>
                                            <td><?php echo $row['jam_keluar'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td><?php echo $row['posisi'];?></td> 
                                            <td><?php echo $row['support'];?></td>
                                            <td><?php echo $row['peminjam'];?></td>
                                            <td>
                                                <?php 
                                                    $s = $row['tanggal_pinjam'];
                                                    $r = date('Y-m-d');
                                                    $tgl1 = new DateTime($s);
                                                    $tgl2 = new DateTime($r);
                                                    $interval = $tgl2->diff($tgl1);
                                                    $count = $interval->format('%d Hari');
                                                    echo $count;
                                                ?>
                                            </td>
                                            <td align="center"> 
                                            <?php echo "<a href='#edit_modal'  style='padding:2px;align-items:center; width:50px;font-size:18px;'' data-toggle='modal' data-id=".$row['id']."><i class='fab fa-twitch' style='color:#024;'></i> </a></td>"; ?></td>
                                        </tr>
                    <?php }?>
                                    </tbody>
                                </table>
<div class="fyi">
<label>Keterangan</label>
<ul>
    <li><a class="btn btn-success"></a> <span>= Peminjaman Kurang Dari 1 Hari</span></li>
    <li><a class="btn btn-info"></a> <span>= Peminjaman selama 1-3 hari</span></li>
    <li><a class="btn btn-danger"></a> <span>= Peminjaman lebih dari 4 hari</span></li>
   
</ul>

</div>
  </div> 
    <script src="js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="pagination/js/jquery.dataTables.js"></script>
    <script src="pagination/js/dataTables.bootstrap.js"></script>
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
                    <h4 class="modal-title">Detail Peminjaman</h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data"></div>
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
                url : 'detail-kembaliHH.php',
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