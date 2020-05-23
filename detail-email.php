<?php
    include "koneksi/koneksi.php";
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysqli_query($koneksi,"SELECT * FROM email WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
        <form action="edit-ip.php" name="demoform" method="post">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-group" style="overflow: hidden;">
            <label>User/admin</label>
                <input type="text"  class="form-control" placeholder="User/Admin" name="admin" value="<?php echo $result['admin']; ?>">
            </div>
            <div class="form-group" style="overflow: hidden;">
            <label>IP Komputer</label>
                <input type="text"  class="form-control" placeholder="IP" name="ip" value="<?php echo $result['ip']; ?>">
            </div>
            <div class="form-group" style="overflow: hidden;">
            <label>Email</label>
              <input type="text" name="email" class="form-control" placeholder="Email" value=<?php echo $result['email'];?>>
            </div>
            <div class="form-group" style="overflow: hidden;">
            <label>Keterangan</label>
            <textarea class="form-control"  placeholder="Keterangan" name="keterangan" ><?php echo $result['keterangan'];?></textarea>
            </div>           
            <br>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
        <div class="del" style="position: relative;left: 80px;"><a onclick="return confirm('Yakin Hapus')" href="delete-email.php?id=<?=$result['id']?>"><button class="btn btn-danger">Hapus</button></a></div> 
        
   
<?php } 
    }
?>