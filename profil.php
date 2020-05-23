<?php
include 'header.php';
include'edit-profile.php';

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
<?php
  $admin= $_SESSION['nama'];
  $sql= "SELECT * FROM user WHERE nama='$admin' LIMIT 1";
  $qry =$koneksi->query($sql);
  while ($data = mysqli_fetch_array($qry)) { ?>

    <form enctype="multipart/form-data" action="" method="POST">
    <input type="hidden" name="id" value=<?= $data['id']?>>
      <label>Username</label> <input type="text" style="width:50%" class="box-input" value=<?= $_SESSION['nama']?> name="name" >
      <label>NIK</label><input type="text" name="nik" style="width:50%"  class="box-input" value=<?=$data['nik'] ?>  name="nik" >
      <label>Password</label><input type="text" name="pass" style="width:50%"  class="box-input" placeholder="******" name="aktiva" >
      <label>Group</label>
        <select class="box-input" name="group_user" style="width:50%" name="group">
            <option><?=$data['group_user'] ?></option>
        </select><br>
          <div class="icon-profile">
          <img src="login/file/<?php echo  $data['filename'];?>">
          <input type="file"  name="filename" >
          </div>
          <div class="tambah" style="background: #fff;"><button type="submit" class="btn btn-primary btn-sm" value="Simpan" name="update" style="position: relative;left: 194px;width:50%;top: -200px;">Simpan <a class="fa fa-check"></a></button>
          </div>
     </form>
  <?php } ?>
    <?php
      $data = new edit_Profile;
      $data->Edit();
    ?>
    </div>
</div>

</body>
<label class="label-primary" style="font-size:  width: 100%; position: absolute; bottom: -120px;letter-spacing: 0.1em;right: 2px;">Copyright 2018 | Created BY Dasep Depiyawan</label>
</html>