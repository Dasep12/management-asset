<?php
include 'header.php';
?>
<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Handheld / History</span>
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
    <h5>History Pinjam HH</h5>
  <div class="box-pinjam" style="position: absolute;left: -1px;"><br>
                                <table class="table-bordered" border="1" width="99.7%" id="dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th colspan="3"><b>Rincian Unit</b></th>
                                            <th colspan="4"><b>Detail Peminjaman</b></th>
                                            <th colspan="3"><b>Posisi</b></th>
                                            <th rowspan="2">Lama Digunakan</th>
                                        </tr>
                                        <th>Serial Number</th>
                                        <th>Aktiva</th>
                                        <th>Kode Unit</th>
                                        <th>Tanggal Dipinjam</th>           
                                        <th>Tanggal Kembali</th>
                                        <th>Peminjam</th>
                                        <th>Adm Support</th>
                                        <th>Sebelumnya</th>
                                        <th>Sekarang</th>
                                        <th>Penerima</th>
                                        
                                  </thead>
                                <tbody>
                    <?php
                    include ('koneksi/koneksi.php');
                      $result = mysqli_query($koneksi, "SELECT * FROM history_pinjamhh ORDER BY id ");
                      while($row = mysqli_fetch_array($result)) {?>
                                        <tr>
                                            <td><?php echo $row['sn'];?></td>
                                            <td><?php echo $row['aktiva'];?></td>
                                            <td><?php echo $row['kode'];?></td>
                                            <td><?php echo $row['tanggal_pinjam'];?></td>   
                                            <td><?php echo $row['tanggal_balik'];?></td>
                                            <td><?php echo $row['peminjam'];?></td>                                            
                                            <td><?php echo $row['support'];?></td>
                                            <td><?php echo $row['posisi_sebelumnya'];?></td>
                                            <td><?php echo $row['posisi'];?></td>
                                            <td><?php echo $row['penerima'];?></td>
                                            <td><?php echo $row['lama_hari'];?></td>
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