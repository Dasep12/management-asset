<?php
include 'header.php';
?>
<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Office / Monitor</span>
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
    <h5>User Aplikasi Support</h5>
<script>
  function buka_print(){
  window.open('data-monitor.php' ,'' ,'menubar=yes','resizeabel=yes','height=480px','width=600px');
}
</script>
  <div class="box-pinjam" style="position: absolute;left: -1px;"><br>
    <a href="register-user.php" target="_new"><button class="btn btn-default btn-sm">Entri Data <i class="fa fa-plus"></i></button></a>


                                <table width="100%" class="table-hover" id="dataTables-example" >
                                    <thead>
                                        <tr>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Password</th>
                                        <th>Group</th>
                                        <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    <?php
                      include 'koneksi/koneksi.php';
                  
                      $result = mysqli_query($koneksi, "SELECT * FROM user ");
                      while($row = mysqli_fetch_array($result)) {?>
                                        <tr class="">
                                            <td><?php echo $row['nama'];?></td>
                                            <td><?php echo $row['nik'];?></td>
                                            <td>***</td>
                                            <td><?php echo $row['group_user'];?></td>
                                            <td><a onclick="return confirm('Yakin Hapus')" href="delete-user.php?id=<?=$row['id']?>"><i style="font-size: 16px; color:#26ab37; " class='fa fa-window-close'></i></a> / 
                                            <?php echo "<a href='#edit_modal'  style='padding:2px;align-items:center; width:50px;font-size:18px;'' data-toggle='modal' data-id=".$row['id']."><i class='fab fa-twitch'></i> </a></td>"; ?></td>
                                        </tr>
                    <?php }?>
                                    </tbody>
                                </table>


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
                    <h4 class="modal-title">Detail monitor</h4>
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
                url : 'detail-list-user.php',
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
                url : 'hapus-modal-monitor.php',
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