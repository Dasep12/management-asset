<?php
//Header
include 'header.php';
?>

<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Web DC / add Web </span>
 <li>
<?php
//Jam dan Tanggal
include 'waktu.php';
?>
<div class="waktu">
<div class="wib"></div><div class="hari" id="output"></div>
</div>
 </li>
</nav>


<?php
//Sidebar
  include 'sidebar.php';
?>
             <!-- Calender -->
    <link rel="stylesheet" type="text/css" href="calender/jquery.datetimepicker.min.css">
    <script type="text/javascript" src="calender/jquery.js"></script>
    <script type="text/javascript" src="calender/jquery.datetimepicker.full.js"></script>
<div id="container">
  <div class="box-header">
    <h5>Entri Link Web DC</h5>
    </div>
    <div class="box-add">
      <form action="" method="POST">
              <label>Nama Web</label>
                <input type="text" placeholder="Web" style="width: 50%;" name="web" class="box-input">
              <label>Link/URL</label>
                <input type="text" style="width: 50%;" name="link" placeholder="LINK WEB/IP WEB" class="box-input">
              <label>Keterangan</label>
                <textarea style="margin-bottom: 150px;width: 50%;" name="ket" class="box-input" placeholder="Deskripsi"></textarea>
          <div class="tambah"><button type="submit" class="btn btn-primary btn-sm" value="Simpan" name="simpan">Simpan <a class="fa fa-check"></a></button>
          </div>
     </form>
<?php
  include 'upload-web.php';
?>
<a href="web-dc.php"><button  type="submit" class="back btn btn-success btn-sm ">Kembali <i class="fa fa-arrow-left"></i></button></a>
    </div>
</div>

</div>
</body>
<!--Footer-->

<?php
include 'footer.php';
?>

</html>