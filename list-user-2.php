<?php
include 'koneksi/koneksi.php';
?>
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
<span><marquee direction="left">Surat Jalan</marquee></span>
 <li>
<?php
function hari_ini(){
$hari = date('D');
switch ($hari) {
  case 'Sun':
    $hari_ini = "Minggu";
    break;
  case 'Mon':
    $hari_ini = "Senin";
    break;
    case 'Tue':
    $hari_ini = "Selasa";
    break;
  case 'Wed':
    $hari_ini = "Rabu";
    break;
     case 'Thu':
    $hari_ini = "Kamis";
    break;
  case 'Fri':
    $hari_ini = "Jumat";
    break; 
  case 'Sat':
    $hari_ini = "Sabtu";
    break;
  default:
    $hari_ini = "Tidak Diketahui";
    break;
}
return "".$hari_ini. ",";
}
echo hari_ini();
echo date('d-m-Y');
date_default_timezone_set("Asia/Jakarta");
echo "";
//$jam = date('H:i');
?>
<div class="waktu">
<div class="wib">Jam : </div><div class="hari" id="output"></div>
</div>
 </li>
</nav>

<div id="sidebar">
<h1>Support</h1>
<span style="margin-left: 75px;"><?php
session_start();
echo $_SESSION['nama'];

?></span>
<br><br>
<ul>
<li>
  <h3><i class="fas fa-home"></i><a href=""> Beranda</a></h3>
</li>
<li>
  <h3><i class="fas fa-desktop"></i> Aktiva Office</h3>
<ul>
  <li><a class="fa fa-laptop"></a><a href=""> user</a></li>
  <li><a class="fa fa-tv"></a> <a href=""> Monitor</a></li>
  <li><a class="fa fa-print"></a> <a href="">Printer</a></li>
</ul>
</li>

<li>
  <h3><i class="fa fa-clipboard"></i> Aktiva DC</h3>
<ul>
  <li><a href="">Handheld</a></li>
  <li><a href="">Intermac</a></li>
  <li><a href="">Vehicle</a></li>
  <li><i class="fab fa-centercode"></i> <a href="">Scanner</a></li>
</ul>
</li>

<li>
  <h3><i class="fa fa-paste"></i> Documentasi</h3>
<ul>
  <li><a class="fa fa-list"></a> <a href="">List Surat Jalan</a></li>
  <li><a class="fa fa-envelope-open"></a> <a href="">Input Surat Jalan</a></li>
  <li><a class="far fa-edit"></a> <a href="">Input Pemakaian Stiker&Ribbon</a></li>
  <li><a class="fas fa-newspaper"></a> <a href="">Tambah Stock Stiker Ribon</a></li>
</ul>
</li>

<li>
  <h3><i class="far fa-user"></i> Setting User</h3>
<ul>
  <li><i class="fa fa-user-plus"></i> <a href="">Tambah User</a></li>
  <li><i class="fa fa-edit"></i> <a href="">Edit Profile</a></li>
  <li><i class="fa fa-list-alt"></i> <a href="">List User</a></li>
</ul>
</li>



<li>
  <h3><i class="fas fa-info-circle"></i> Informasi</h3>
<ul>
  <li><i class="fas fa-net"></i> <a href=""> Daftar IP DC</a></li>
  <li><i class="fa fa-link"> </i><a href=""> WEB DC</a></li>
  <li><i class="far fa-mail"></i><a href=""> Address Email DC</a></li>     
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

<?php

?>
<div id="container">
  <nav class="navbar" style="margin-top: 50px;">
  <li style="float: left;width: 10%;padding:8.5px; letter-spacing: .1em;text-align: center;cursor: unset;">Data user</li>
  <li style="margin-right: 0px;"><a href="login/register-user.php"> Tambah User  <i style="font-size: 19px; margin-bottom: -3px; color: #26ab90;" class="fa fa-plus"></i></a></li>

</nav>
<br><br><br><br>
						<div class="panel-body" style="margin-top: -80px;">
                            <div class="form-group" style="border: 2px solid silver; ">
                               <div class="sub-type">
                                  <li>
                                    <a href="list-user.php">
                                     <?php $data = "SELECT * FROM user WHERE group_user='admin'";
                                      $r = mysqli_query($koneksi,$data);
                                      $count_r = mysqli_num_rows($r);                                     
                                      echo "Admin <b>($count_r)</b>"?>
                                    </a>
                                  </li>
                                  <li  class="active">
                                    <a href="list-user-2.php">
                                      <?php $data = "SELECT * FROM user WHERE group_user='support'";
                                      $r = mysqli_query($koneksi,$data);
                                      $count_r = mysqli_num_rows($r);                                     
                                      echo "Support <b>($count_r)</b>"?>
                                    </a>    
                                    </a>
                                  </li>
                                 </div>   
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
                  
											$result = mysqli_query($koneksi, "SELECT * FROM user WHERE group_user='support'  ");
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
   
<label class="label-primary" style="font-size:  width: 100%; position: absolute; bottom: -120px;letter-spacing: 0.1em;right: 2px;">Copyright 2018 | Created BY Dasep Depiyawan</label>



    <div class="modal fade" id="edit_modal" role="dialog" style="z-index: 9999">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail user</h4>
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



</body>
</html>