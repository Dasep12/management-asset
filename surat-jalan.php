 <?php
include 'header.php';

?>

<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Surat Jalan </span>
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
    <link rel="stylesheet" type="text/css" href="calender/jquery.datetimepicker.min.css">
    <script type="text/javascript" src="calender/jquery.js"></script>
    <script type="text/javascript" src="calender/jquery.datetimepicker.full.js"></script>
<div id="container">
  <div class="box-header">
    <h5>Data Entri Surat Jalan</h5>
  <div class="box-pinjam" style="position: absolute;left: -1px;"><br>
<div class="form-cari-stiker">
  <form method="POST" name="datetime" class="cari-sj">
  <select class="form-control-1" name="tipe">
    <option value="">Pilih Tipe SJ</option>
    <option  value="Masuk">Surat Jalan Masuk</option>
    <option value="Keluar">Surat Jalan Keluar</option>
  </select>
    <input type="submit" name="cari" value="View" class="btn btn-danger btn-sm">
  </form>
</div>
<?php
  if (isset($_POST['cari'])) {
    $tipe = $_POST['tipe'];
          $result = mysqli_query($koneksi,"SELECT * FROM sj_keluar WHERE type_sj='$tipe' ");
          $tgl1 = mysqli_num_rows($result);
      if($tgl1==0) {
        echo "Tanggal Harus Di isi
        ";
      }else{ ?>
         <table class="table-responsive" style="position: relative;" width="100%" id="dataTables-example" >
            <thead>
                <th height="60px">Nama Barang</th>
                <th>Pengirim</th>
                <th>Penerima</th>
                <th>Detail</th>
                <th>Tanggal Pengiriman</th>
                <th>Jenis Surat Jalan</th>
                <th>Keterangan</th>
                <th>Opsi</th>
          </thead>
     <tbody>
        <?php
        while($row = mysqli_fetch_array($result)) { ?>
        <tr class="">
            <td><?php echo $row['nama_barang'];?></td>
            <td><?php echo $row['pengirim'];?></td>
            <td><?php echo $row['penerima'];?></td>
            <td><?php echo $row['detail'];?></td>  
            <td><?php echo $row['tanggal_kirim'];?></td>
            <td><?php echo $row['type_sj'];?></td>
            <td><?php echo $row['ket'];?></td>
            <td>
            <a href='#edit_modal'  style='padding:2px;align-items:center; width:50px;' data-id=<?=$row['id']?>; data-toggle='modal'><i style="font-size: 14px; color:#26ab37; " class='fa fa-trash-alt'></i></a></td>
          </tr>
      </tbody>
      <?php   } ?>
  </table>

  <?php   }
  }
?>
        <script>
        $("#datetime").datetimepicker();
        </script>
        <script>
        $("#datetime2").datetimepicker();
        </script>
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
       <div class="modal fade" id="edit_modal" role="dialog" style="z-index: 9999;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Surat Jalan</h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data"></div>
                </div>
                <div class="modal-footer">
                <button style="z-index: 9999;position: relative;" type="button" class="btn btn-info" data-dismiss="modal">Keluar</button>
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
                url : 'detail-sjkeluar.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
</body>
<?php
include 'footer.php';
?>
</html>