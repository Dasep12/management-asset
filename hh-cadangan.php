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
<span><marquee direction="left">Handheld Cadangan</marquee></span>
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
<span style="margin-left: 75px;text-transform: uppercase;">
<?php

  session_start();
  echo $_SESSION['nama'];

?>
</span>
<br><br>
<ul>
<li>
  <h3><i class="fas fa-home"></i><a href=""> Beranda</a></h3>
</li>
<li>
  <h3><i class="fas fa-desktop"></i> Aktiva Office</h3>
<ul>
  <li><a class="fa fa-laptop"></a><a href=""> Komputer</a></li>
  <li><a class="fa fa-tv"></a> <a href=""> handheld</a></li>
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
<script>
  function buka_print(){
  window.open('data-hh.php' ,'' ,'menubar=yes','resizeabel=yes','height=480px','width=600px');
}
</script>

<div id="container">
  <nav class="navbar" style="margin-top: 50px;">
  <li style="float: left;width: 10%;padding:8.5px; letter-spacing: .1em;text-align: center;cursor: unset;">Data handheld</li>
  <li style="margin-right: 0px;"><a href="add-handheld.php"> Tambah Data  <i style="font-size: 19px; margin-bottom: -3px; color: #ccc;" class="fa fa-plus"></i></a></li>
  <li><a href="export-hh.php"> Export To CSV <i style="font-size: 19px; color: #ccc; margin-bottom: -3px; " class="fa fa-file-excel"></i></a></li>
  <li><a href="javascript:buka_print()"> Printout <i style="font-size: 19px; color: #ccc; margin-bottom: -3px; " class="fa fa-print"></i></a></li>
</nav>
<br><br><br><br>
            <div class="panel-body" style="margin-top: -80px;">
                            <div class="form-group" style="border: 2px solid gray;">
                               <div class="sub-type">
                                  <li>
                                    <a href="index-handheld.php?all_data">
                                     <?php $data = "SELECT * FROM handheld";
                                      $r = mysqli_query($koneksi,$data);
                                      $count_r = mysqli_num_rows($r);                                     
                                      echo "All Data ($count_r)"?>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="hh-baik.php?=m&view=hhbaik">
                                      <?php $data = "SELECT * FROM handheld WHERE status='cadangan' or status='aktif'";
                                      $r = mysqli_query($koneksi,$data);
                                      $count_r = mysqli_num_rows($r);                                     
                                      echo "Baik ($count_r)"?>
                                    </a>    
                                    </a>
                                  </li>
                                  <li>
                                    <a href="hh-rusak.php?=m&view=hhrusak">
                                      <?php $data = "SELECT * FROM handheld WHERE status='rusak'";
                                      $r = mysqli_query($koneksi,$data);
                                      $count_r = mysqli_num_rows($r);                                     
                                      echo "Rusak ($count_r)"?>                                      
                                    </a>
                                  </li>
                                  <li>
                                    <a href="hh-service.php?=m&view=hhservice">
                                      <?php $data = "SELECT * FROM handheld WHERE status='service'";
                                      $r = mysqli_query($koneksi,$data);
                                      $count_r = mysqli_num_rows($r);                                     
                                      echo "Service ($count_r)"?>                                      
                                    </a>
                                  </li>
                                  <li class="active">
                                    <a href="hh-cadangan.php?=m&view=hhservice">
                                      <?php $data = "SELECT * FROM handheld WHERE status='cadangan'";
                                      $r = mysqli_query($koneksi,$data);
                                      $count_r = mysqli_num_rows($r);                                     
                                      echo "Cadangan ($count_r)"?>                                      
                                    </a>
                                  </li>                                  
                                 </div>                            
                                <table class="table-hover" width="100%" id="dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th rowspan="2" >Merk</th>
                                            <th rowspan="2"  >Type</th>
                                            <th rowspan="2"  >Serial Number</th>
                                            <th rowspan="2" >Aktiva</th>
                                            <th colspan="2" >Detail</th>
                                            <th rowspan="2">Status</th>
                                            <th rowspan="2">Posisi</th>
                                            <th rowspan="2">Kode Unit</th>
                                            <th rowspan="2">Opsi</th>
                                        </tr>
                                        <th>Nilai Aktiva</th>
                                        <th>Biaya Pendapatan</th>
                                        
                                  </thead>
                                <tbody>
                    <?php
                    include ('koneksi/koneksi.php');
                          function rupiah($angka){
                          $hasil_rupiah = "Rp.". number_format($angka,2,',','.');
                          return $hasil_rupiah;
                          }
                      $result = mysqli_query($koneksi, "SELECT * FROM handheld WHERE status='cadangan'");
                      while($row = mysqli_fetch_array($result)) {?>
                                        <tr class="">
                                            <td><?php echo $row['merk'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <td><?php echo $row['sn'];?></td>
                                            <td><?php echo $row['aktiva'];?></td>
                                            <td><?php echo rupiah($row['nilai_p']);?></td>
                                            <td><?php echo rupiah($row['biaya_p']);?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td><?php echo $row['posisi'];?></td>
                                            <td><?php echo $row['kode'];?></td>
                                            <td><a onclick="return confirm('Yakin Hapus')" href="delete-handheld.php?id=<?=$row['id']?>"><i style="font-size: 16px; color:#26ab37; " class='fa fa-trash-alt'></i></a> / 
                                            <?php echo "<a href='#edit_modal'  style='padding:2px;align-items:center; width:50px;font-size:18px;'' data-toggle='modal' data-id=".$row['id']."><i class='fab fa-twitch'></i> </a></td>"; ?></td>
                                        </tr>
                    <?php }?>
                                    </tbody>
                                </table>
<!--Pagination -->
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
<!--Modal Edit -->
   <!--Footer-->
<label class="label-primary" style="font-size:  width: 100%; position: absolute; bottom: -120px;letter-spacing: 0.1em;right: 2px;">Copyright 2018 | Created BY Dasep Depiyawan</label>
   <!--Footer-->

   <!--Modal Edit -->
    <div class="modal fade" id="edit_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Handheld</h4>
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
                url : 'detail-hh.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
<!--Modal Edit -->


</body>
</html>