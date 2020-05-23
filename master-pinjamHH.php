<?php
include 'header.php';
?>
<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Handheld / Master HH</span>
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
    <h5>Handheld Cadangan</h5>
  <div class="box-pinjam" style="position: absolute;left: -1px;"><br>
                                <table class="table-bordered" border="1" width="100%" id="dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Merk</th>
                                            <th rowspan="2">Type</th>
                                            <th rowspan="2">Serial Number</th>
                                            <th rowspan="2">Aktiva</th>
                                            <th colspan="3">Detail</th>
                                            <th rowspan="2">Status</th>
                                            <th rowspan="2">Posisi</th>
                                            <th rowspan="2" width="8%">Opsi</th>
                                            
                                        </tr>
                                        <th>Biaya Pendapatan</th>
                                        <th>Nilai Aktiva</th>
                                        <th>Tahun Perolehan</th>

                                  </thead>
                                <tbody>
                    <?php
                    include ('koneksi/koneksi.php');
                      $result = mysqli_query($koneksi, "SELECT * FROM handheld WHERE status='cadangan' ");
                      while($row = mysqli_fetch_array($result)) {?>
                                        <tr>
                                            <td><?php echo $row['merk'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <td><?php echo $row['sn'];?></td>
                                            <td><?php echo $row['aktiva'];?></td>
                                            <td><?php echo $row['nilai_p'];?></td>
                                            <td><?php echo $row['biaya_p'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td><?php echo $row['posisi'];?></td>
                                            <td><?php echo $row['kode'];?></td>
                                            <td><a href='#edit_modal' data-toggle='modal' data-id=<?=$row['id']?>><i class='fa fa-edit'  style="font-weight: bold;font-size: 15px;"></i></a></td>
                                        </tr>
                    <?php }?>
                                    </tbody>
                                </table>

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
                <div class="modal-footer">
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
                url : 'detail-pinjam.php',
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