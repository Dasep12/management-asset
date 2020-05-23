<?php
    include "koneksi/koneksi.php";
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysqli_query($koneksi,"SELECT * FROM web_dc WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
        <form action="edit-web.php" name="demoform" method="post">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-group" style="overflow: hidden;">
            <label>WEB</label>
                <input type="text"  class="form-control" placeholder="Merk" name="web" value="<?php echo $result['web']; ?>">
            </div>
            <div class="form-group" style="overflow: hidden;">
            <label>LINK</label>
                <input type="text"  class="form-control" placeholder="Merk" name="link" value="<?php echo $result['link']; ?>">
            </div>
            <div class="form-group" style="overflow: hidden;">
            <label>Keterangan</label>
            <textarea class="form-control"  placeholder="Keterangan" name="ket" ><?php echo $result['ket'];?></textarea>
            </div>           
            <br>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
        <div class="del" style="position: relative;left: 80px;"><a onclick="return confirm('Yakin Hapus')" href="delete-web.php?id=<?=$result['id']?>"><button class="btn btn-danger">Hapus</button></a></div> 
        
   
<?php } 
    }
?>