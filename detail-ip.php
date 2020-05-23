<?php
    include "koneksi/koneksi.php";
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysqli_query($koneksi,"SELECT * FROM ip_dc WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
        <form action="edit-ip.php" name="demoform" method="post">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-group" style="overflow: hidden;">
            <label>User/admin</label>
                <input type="text"  class="form-control" placeholder="User/Admin" name="user" value="<?php echo $result['user']; ?>">
            </div>
            <div class="form-group" style="overflow: hidden;">
            <label>IP Komputer</label>
                <input type="text"  class="form-control" placeholder="IP" name="ip" value="<?php echo $result['ip']; ?>">
            </div>
            <div class="form-group" style="overflow: hidden;">
            <label>Posisi</label>
                <select name="posisi" class="form-control">
                   <option><?php echo $result['posisi']; ?></option>
                  <option value="">-Pilih Posisi-</option>
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
            </div>
            <div class="form-group" style="overflow: hidden;">
            <label>Keterangan</label>
            <textarea class="form-control"  placeholder="Keterangan" name="ket" ><?php echo $result['ket'];?></textarea>
            </div>           
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
        <div class="del" style="position: relative;left: 80px;"><a onclick="return confirm('Yakin Hapus')" href="delete-ip.php?id=<?=$result['id']?>"><button class="btn btn-danger">Hapus</button></a></div> 
        
   
<?php } 
    }
?>