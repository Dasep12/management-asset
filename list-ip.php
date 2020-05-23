<?php
include 'header.php';
?>

<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Informasi / IP DC </span>
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
    <h5>List IP DC</h5>
  <div class="box-pinjam" style="position: absolute;left: -1px;"><br>
<a href="add-ip.php" class="btn btn-danger" ><i class="fa fa-plus"></i> Tambah Data</a>
                                <table class="table-responsive" width="100%" id="dataTables" >
                                    <thead>
                                        <th>No</th>
                                        <th>User / Admin</th>
                                        <th>IP</th>
                                        <th>Posisi</th>
                                        <th>Opsi</th>
                                      </tr>
                                  </thead>
                                <tbody>
                    <?php
                    include ('koneksi/koneksi.php');
                  
                      $result = mysqli_query($koneksi, "SELECT * FROM ip_dc ORDER BY id  ");
                      $no =1;
                      while($row = mysqli_fetch_array($result)) {?>
                                        <tr class="">
                                            <td><?= $no++?></td>
                                            <td><?php echo $row['user'];?></td>
                                            <td><?php echo $row['ip'];?></td>                                            
                                            <td><?php echo $row['posisi'];?></td>
                                            <td><?php echo "<a href='#edit_modal'  style='padding:2px;align-items:center; width:50px;font-size:18px;'' data-toggle='modal' data-id=".$row['id']."><i class='fab fa-twitch'></i> </a>"; ?></td>

                                        </tr>
                    <?php }?>
                                    </tbody>
                                </table>
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
                    <h4 class="modal-title">Detail Web</h4>
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
   <!--Modal Edit -->
  <script type="text/javascript">
/*Function Untuk Modal Edit Bootstrap*/
    $(document).ready(function(){
        $('#edit_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail-ip.php',
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