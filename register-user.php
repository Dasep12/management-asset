<?php
include 'header.php';
?>
<nav class="tanggal" style="margin-top: -12px;">
<span><marquee direction="left">CPU Baik</marquee></span>
 <li>
<?php
include 'waktu.php';
?>
<div class="waktu">
<div class="wib"></div><div class="hari" id="output"></div>
</div>
 </li>
</nav>
</nav>

<?php 
  include 'sidebar.php';
 ?>

<div id="container">
  <div class="box-header">
    <h5>Entri User Baru</h5>
    </div>
    <div class="box-add">
      <form enctype="multipart/form-data" action="" method="POST">
      <label>Username</label> <input type="text" style="width:50%" class="box-input" placeholder="Entri Name" name="name" >
      <label>NIK</label><input type="text" name="nik" style="width:50%"  class="box-input" placeholder="Entri NIK" name="nik" >
      <label>Password</label><input type="text" name="pass" style="width:50%"  class="box-input" placeholder="Entri Password" name="aktiva" >
      <label>Group</label>
        <select class="box-input" name="group_user" style="width:50%" name="group">
            <option>Admin</option>
            <option>Support</option>
        </select><br>
          <div class="icon-profile">
          <img src="img/user1.png">
          <input type="file"  name="filename" class="">
          </div>
          <div class="tambah" style="background: #fff;"><button type="submit" class="btn btn-primary btn-sm" value="Simpan" name="simpan" style="position: relative;left: 194px;width:50%;top: -200px;">Simpan <a class="fa fa-check"></a></button>
          </div>
     </form>
    <?php
      include'upload-user.php';
    ?>
    </div>
</div>

</body>
<label class="label-primary" style="font-size:  width: 100%; position: absolute; bottom: -120px;letter-spacing: 0.1em;right: 2px;">Copyright 2018 | Created BY Dasep Depiyawan</label>
</html>