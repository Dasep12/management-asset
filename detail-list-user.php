
<!DOCTYPE html>
<html>
<head>
    <title></title>
                             <!-- Calender -->
        <link rel="stylesheet" type="text/css" href="calender/jquery.datetimepicker.min.css">
        <script type="text/javascript" src="calender/jquery.js"></script>
        <script type="text/javascript" src="calender/jquery.datetimepicker.full.js"></script>
</head>
<body>

<?php
    include "koneksi/koneksi.php";
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysqli_query($koneksi,"SELECT * FROM user WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
        <form action="edit-user.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-group" style="overflow: hidden;width: 60%;">
            <label>Nama</label>
                <input type="text" class="form-control" placeholder="Username" name="nama" value="<?php echo $result['nama']; ?>">
            </div>
            <div class="form-group" style="overflow: hidden;width: 60%;">
            <label>Password</label>
                <input type="text" class="form-control" placeholder="Pasword" name="pass" value="***">
            </div>
            <div class="form-group" style="overflow: hidden;">
            <label>NIK</label>
                <input type="text" class="form-control" placeholder="Aktiva" name="nik" value="<?php echo $result['nik']; ?>">
            </div>
            <div class="form-group" style="overflow: hidden;">
            <label>Group</label>
            <select  style="height: 5%; width: 100%" name="group_user" class="form-control">
                    <option ><?php echo $result['group_user'];?></option>
                    <option value="Admin">Admin</option>
                    <option value="Support">Support</option>
                </select>
            </div>    
            <div class="form-group" style="overflow: hidden;">
            <label>Status</label>
            <select  style="height: 5%; width: 100%" name="status" class="form-control">
                    <option ><?php echo $result['status'];?></option>
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                </select>
            </div>   
            <div class="avatar">
                <img src="login/file/<?php echo  $result['filename'];?>">
            </div>        
            <button class="btn btn-primary" type="submit">Update</button>
        </form>     
        <?php 
        } 
    }
?>
</body>
</html>
