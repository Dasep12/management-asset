<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="https://pencarikode.blogspot.com/" name="description" />
    <meta content="https://pencarikode.blogspot.com/" name="author" />
    <title>Aplikasi Support</title>
     <!-- TABLE STYLES-->
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <script defer src="fontawesome-free-5.0.2/svg-with-js/js/fontawesome-all.min.js"></script>
<script type="text/javascript">
  // 1 detik = 1000
  windows.setTimeout("waktu()",10000);
  function waktu(){
    var tanggal = new Date();
    setTimeout("waktu()",1000);
    document.getElementById('output').innerHTML =tanggal.getHours()+":" +tanggal.getMinutes()+":"+tanggal.getSeconds();
  }
</script>
</head>
<body onload="waktu()">
<header class="page-header">
      <h2>PT Indomarco Prismatama</h2>
      <span>DC Jakarta | G001 | Aplikasi Support </span>
        <div class="logout">
          <a href="login/logout.php">Logout</a> 
        </div>    
      <img src="img/logo1.png">
         
</header>
<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Surat Jalan / Masuk </span>
 <li>
<?php
  include 'waktu.php';
?>
<div class="waktu">
<div class="wib"></div><div class="hari" id="output"></div>
</div>
 </li>
</nav>

<div id="sidebar">
<h1>Support</h1>
<span style="margin-left: 75px;">Dasep</span>
<br><br>
<ul>
<li>
  <h3><i class="fas fa-home"></i><a href=""> Beranda</a></h3>
</li>
<li>
  <h3><i class="fas fa-desktop"></i> Aktiva Office</h3>
<ul>
  <li><a href="">Komputer</a></li>
  <li><a href="">sjmasuk</a></li>
  <li><a href="">Printer</a></li>
</ul>
</li>

<li>
  <h3><i class="fas fa-exl"></i> Aktiva DC</h3>
<ul>
  <li><a href="">Handheld</a></li>
  <li><a href="">Intermac</a></li>
  <li><a href="">Vehicle</a></li>
  <li><a href="">Scanner</a></li>
</ul>
</li>

<li>
  <h3><i class="fas fa-book"></i> Documentasi</h3>
<ul>
  <li><a href="">List Surat Jalan</a></li>
  <li><a href="">Input Surat Jalan</a></li>
</ul>
</li>

<li>
  <h3><i class="far fa-user"></i> Setting User</h3>
<ul>
  <li><a href="">Tambah User</a></li>
  <li><a href="">Edit Profile</a></li>
  <li><a href="">List User</a></li>
</ul>
</li>



<li>
  <h3><i class="fas fa-info-circle"></i> Informasi</h3>
<ul>
  <li><a href="">Daftar IP DC</a></li>
  <li><a href="">WEB DC</a></li>
  <li><a href="">Address Email DC</a></li>     
</ul>
</li>



</ul>
</li>
</div>
<script type="text/javascript" src="../dc-g001/js/jquery.min.js"></script>
<script>

/*jQuery time*/
$(document).ready(function(){
 $("#sidebar h3").click(function(){
  //slide up all the link lists
  $("#sidebar ul ul ").slideUp();
  //slide down the link list below the h3 clicked - only if its closed
  if(!$(this).next().is(":visible"))
  {
   $(this).next().slideDown();
  }
 })
})
</script>


<div id="container">
  <div class="box-header">
    <h5>Surat Jalan Masuk</h5>
  <div class="box-pinjam" style="position: absolute;left: -1px;"><br>
    <a href="add-surat-jalan.php" target="_blank"><button class="btn btn-default btn-sm">Entri Surat Jalan <i class="fa fa-plus"></i></button></a>
    <?php
      include 'koneksi/koneksi.php';
      $row = mysqli_query($koneksi,"SELECT * FROM sj_keluar WHERE type_sj='keluar'");
      $count = mysqli_num_rows($row);
    ?>
    <a href="sj-keluar.php" target="blank"><button class="btn btn-default btn-sm">Surat Jalan Keluar <?= $count ?></button></a>
    <?php
      include 'koneksi/koneksi.php';
      $row = mysqli_query($koneksi,"SELECT * FROM sj_keluar WHERE type_sj='masuk'");
      $count = mysqli_num_rows($row);
    ?>
    <a href="sj-masuk.php" target="_new"><button class="btn btn-default btn-sm">Surat Jalan Masuk <?= $count ?> </button></a>

         <table class="table-responsive" width="100%" id="dataTables-example" >
            <thead>
                <th>Nama Barang</th>
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
        include ('koneksi/koneksi.php');
        $result = mysqli_query($koneksi, "SELECT * FROM sj_keluar WHERE type_sj='masuk' ");
        while($row = mysqli_fetch_array($result)) {?>
        <tr class="">
            <td><?php echo $row['nama_barang'];?></td>
            <td><?php echo $row['pengirim'];?></td>
            <td><?php echo $row['penerima'];?></td>
            <td><?php echo $row['detail'];?></td>  
            <td><?php echo $row['tanggal_kirim'];?></td>
            <td><?php echo $row['type_sj'];?></td>
            <td><?php echo $row['ket'];?></td>
            <td>
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
   
<label class="label-primary" style="font-size:  width: 100%; position: absolute; bottom: -120px;letter-spacing: 0.1em;right: 2px;">Copyright 2018 | Created BY Dasep Depiyawan</label>



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
</html>