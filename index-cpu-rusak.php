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
<span><marquee direction="left">CPU Rusak</marquee></span>
 <li>
<?php
function bulan(){
$bulan =date('m');
  switch ($bulan) {
    case '01':
      $bulan = "Januari";
      break;
    case '01':
      $bulan = "Januari";
      break;    
    case '03':
      $bulan = "Maret";
      break;
    case '04':
      $bulan = "April";
      break;
    case '05':
      $bulan = "Mei";
      break;    
    case '06':
      $bulan = "Juni";
      break;
    case '07':
      $bulan = "Juli";
      break;
    case '08':
      $bulan = "Agustus";
      break;    
    case '09':
      $bulan = "September";
    case '10':
      $bulan = "Oktober";
      break;
    case '11':
      $bulan = "November";
      break;    
    case '12':
      $bulan = "Desember";
      break;
      break;    default:
      # code...
      break;
  }
  return "".$bulan. "";
}
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
return "".$hari_ini.",";
}
echo hari_ini();
echo date('d ');
echo bulan();
echo date(' Y');
date_default_timezone_set("Asia/Jakarta");
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
  <li><a class="fa fa-laptop"></a><a href=""> Komputer</a></li>
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
  <li><a class="fa fa-pencil-alt"></a> <a href="">Input Surat Jalan</a></li>
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
  <li><i class="far fa-envelope"></i><a href=""> Address Email DC</a></li>     
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
<script>
  function buka_print(){
  window.open('data-pc.php' ,'' ,'menubar=yes','resizeabel=yes','height=480px','width=600px');
}
</script>
  <nav class="navbar" style="margin-top: 50px;">
  <li style="float: left;width: 10%;padding:8.5px; letter-spacing: .1em;text-align: center;cursor: unset;">Data Komputer</li>
  <li style="margin-right: 0px;"><a href="add-pc.php"> Tambah Data  <i style="font-size: 19px; margin-bottom: -3px; color: #ccc;" class="fa fa-plus"></i></a></li>
  <li><a href="export-pc.php"> Export To CSV <i style="font-size: 19px; color: #ccc; margin-bottom: -3px; " class="fa fa-file-excel"></i></a></li>
  <li><a href="javascript:buka_print()"> Print <i style="font-size: 19px; color: #ccc; margin-bottom: -3px; " class="fa fa-print"></i></a></li>
</nav>
<br><br><br><br>
            <div class="panel-body" style="margin-top: -80px;">
                            <div class="form-group" style="border: 2px solid silver; ">
                               <div class="sub-type">
                               <?php
                                
                                $data1 = "SELECT * FROM komputer WHERE status='rusak'";
                                $data2 = "SELECT * FROM komputer WHERE status='service'";

                               ?>
                                  <li>
                                    <a href="index-cpu.php">
                                     <?php $data = "SELECT * FROM komputer";
                                      $r = mysqli_query($koneksi,$data);
                                      $count_r = mysqli_num_rows($r);                                     
                                      echo "All Data ($count_r)"?>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="index-cpu-baik.php">
                                      <?php $data = "SELECT * FROM komputer WHERE status='aktif' or status='cadangan'";
                                      $r = mysqli_query($koneksi,$data);
                                      $count_r = mysqli_num_rows($r);                                     
                                      echo "Baik ($count_r)"?>
                                    </a>    
                                    </a>
                                  </li>
                                  <li class="active">
                                    <a href="index-cpu-rusak.php">
                                      <?php $data = "SELECT * FROM komputer WHERE status='rusak'";
                                      $r = mysqli_query($koneksi,$data);
                                      $count_r = mysqli_num_rows($r);                                     
                                      echo "Rusak ($count_r)"?>                                      
                                    </a>
                                  </li>
                                  <li>
                                    <a href="index-cpu-service.php">
                                      <?php $data = "SELECT * FROM komputer WHERE status='service'";
                                      $r = mysqli_query($koneksi,$data);
                                      $count_r = mysqli_num_rows($r);                                     
                                      echo "Service ($count_r)"?>                                      
                                    </a>
                                  </li>
                                  <li>
                                    <a href="index-cpu-cadangan.php">
                                      <?php $data = "SELECT * FROM komputer WHERE status='cadangan'";
                                      $r = mysqli_query($koneksi,$data);
                                      $count_r = mysqli_num_rows($r);                                     
                                      echo "Cadangan ($count_r)"?>                                      
                                    </a>
                                  </li>
                            </div>
                                <table width="100%" class="table-hover" id="dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th rowspan="2" >Merk</th>
                                            <th rowspan="2"  >Serial Number</th>
                                            <th rowspan="2" >Aktiva</th>
                                            <th colspan="2"  >Spesifikasi</th>
                                            <th colspan="2" > Info </th>
                                            <th rowspan="2">Status</th>
                                            <th rowspan="2">Opsi</th>
                                        </tr>
                                      <tr>
                                        <th>RAM</th>
                                        <th>Procesor</th>
                                        <th>Posisi</th>
                                        <th>IP</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                    <?php
                      include 'koneksi/koneksi.php';
                      $result = mysqli_query($koneksi, "SELECT * FROM komputer WHERE status='rusak' ");
                      while($row = mysqli_fetch_array($result)) {?>
                                        <tr class="">
                                            <td><?php echo $row['merk'];?></td>
                                            <td><?php echo $row['sn'];?></td>
                                            <td><?php echo $row['aktiva'];?></td>
                                            <td><?php echo $row['procesor'];?></td>
                                            <td><?php echo $row['ram'];?></td>
                                            <td><?php echo $row['posisi'];?></td>
                                            <td><?php echo $row['ip'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td><a onclick="return confirm('Yakin Hapus')" href="delete-pc.php?id=<?=$row['id']?>"><i style="font-size: 16px; color:#26ab37; " class='fa fa-trash-alt'></i></a> / 
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



</body>
</html>