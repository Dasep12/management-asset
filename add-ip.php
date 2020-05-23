<?php
//Header
include 'header.php';
?>

<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / ip DC / add ip </span>
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
    <h5>Entri Link ip DC</h5>
    </div>
    <div class="box-add">
      <form action="" method="POST">
              <label>User/Admin</label>
                <input type="text" style="width: 50%;" placeholder="user/pengguna" name="user" class="box-input">
              <label>IP Addres / User</label>
                <input type="text" name="ip" style="width: 50%;" placeholder="IP - user" class="box-input">
              <label>Posisi</label>
                <select name="posisi" style="width: 50%;" class="box-input">
                  <option value=" ">-Pilih Posisi-</option>
                  <option>Admin STC</option>
                  <option>Admin GPS</option>
                  <option>Admin NPB</option>
                  <option>Admin BPB</option>
                  <option>Admin Support</option>
                  <option>DDCM</option>
                  <option>Server Picking</option>
                  <option>Server Scann</option>
                  <option>Server IIS</option>
                </select>
              <label>Status IP</label>
              <select name="status" class="box-input" style="width: 50%">
                <option value="">-Status IP-</option>
                <option>Aktif</option>
                <option>Pasif</option>
              </select>
              <label>Keterangan</label>
                <textarea name="ket" style="margin-bottom: 90px;width: 50%;" class="box-input" placeholder="Deskripsi"></textarea>
          <div class="tambah"><button type="submit" class="btn btn-primary btn-sm" value="Simpan" name="simpan">Simpan <a class="fa fa-check"></a></button>
          </div>
     </form>
<?php
  include 'upload-ip.php';
?>
<a href="list-ip.php"><button  type="submit" class="back btn btn-success btn-sm ">Kembali <i class="fa fa-arrow-left"></i></button></a>
    </div>
</div>

</div>
</body>
<!--Footer-->

<?php
include 'footer.php';
?>

</html>