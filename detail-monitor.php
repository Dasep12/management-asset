                         <!-- Calender -->
        <link rel="stylesheet" type="text/css" href="calender/jquery.datetimepicker.min.css">
        <script type="text/javascript" src="calender/jquery.js"></script>
        <script type="text/javascript" src="calender/jquery.datetimepicker.full.js"></script>
<?php
    include "koneksi/koneksi.php";
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysqli_query($koneksi,"SELECT * FROM monitor WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
        <form action="edit-monitor.php" name="demoform" method="post">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-group" style="overflow: hidden;">
            <label>Merk</label>
                <input type="text"  class="form-control" placeholder="Merk" name="merk" value="<?php echo $result['merk']; ?>">
            
            <div class="form-group" style="overflow: hidden;" >
            <label>Serial Number</label>
                <input type="text" class="form-control" placeholder="Serial Number" name="sn" value="<?php echo $result['sn']; ?>">
            
            
            <label>Aktiva</label>
                <input type="text" class="form-control" placeholder="Aktiva" name="aktiva" value="<?php echo $result['aktiva']; ?>">
            
            
             <label>Ukuran</label>
                <input type="text" class="form-control" placeholder="Ukuran" name="ukuran" value="<?php echo $result['ukuran']; ?>">
                        
            
             <label>Tahun Perolehan</label>
                <input type="text" class="form-control" id="datetime-1" placeholder="Tahun Perolehan" name="tahun_p" value="<?php echo $result['tahun_p']; ?>">           
            
            
             <label>Biaya Pendapatan</label>
                <input type="text" class="form-control" placeholder="Biaya Pendapatan" name="biaya_p" value="<?php echo $result['biaya_p']; ?>">
            
            
             <label>Tanggal Update</label>
             <input type="text" class="form-control" id="datetime" name="tgl_update" placeholder="Tanggal Update"   value="<?php echo $result['tgl_update']; ?>">
                          
            
             <label>Nilai Aktiva</label>
                <input type="text" class="form-control" placeholder="Nilai Aktiva" name="nilai_aktiva" value="<?php echo $result['nilai_aktiva'];?>">
                       
            
            <label>Posisi</label>
            <select style="height: 5%; width: 101.5%" name="posisi" class="form-control">
                    <option value="<?php echo $result['posisi'];?>"><?php echo $result['posisi'];?></option>
                    <option value="Admin Atas">Admin Atas</option>
                    <option value="Admin Bawah">Admin Bawah</option>
                    <option value="Retur Toko">Retur Toko</option>
                    <option value="Retur Supplier">Retur Supplier</option>
                    <option value="Admin Chips">Admin Chips</option>
                    <option value="GA">GA</option>
                    <option value="LPG">LPG</option>
                </select>
            
            
            <label>Status</label>
            <select  style="height: 5%; width: 101.5%" name="status" class="form-control">
                    <option><?php echo $result['status'];?></option>
                    <option value="Baik">Baik</option>
                    <option value="Service">Service</option>
                    <option value="Cadangan">Cadangan</option>
                    <option value="Rusak">Rusak</option>
                </select>
                  
            
            <label>Keterangan</label>
            <textarea class="form-control"  placeholder="Keterangan" name="ket" ><?php echo $result['ket'];?></textarea>
            </div>       
            <br>
              <button class="btn btn-primary" type="submit">Update</button>
        </form> 
   
<?php } 
    }
?>
                <!-- date timepicker-->
                <script>
                $("#datetime").datetimepicker();
                </script>
                                <!-- date timepicker-->
                <script>
                $("#datetime-1").datetimepicker();
                </script>