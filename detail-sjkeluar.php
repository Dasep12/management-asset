<?php
    include "koneksi/koneksi.php";
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysqli_query($koneksi,"SELECT * FROM sj_keluar WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
        <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-group-1">
            <label>Nama Barang</label>
            <input type="text" class="form-control-1" placeholder="Nama Barang" name="nama_barang" value="<?php echo $result['nama_barang'];?>">
            <label>QTY</label>
            <input type="text" class="form-control-1" placeholder="QTY" name="qty" value="<?php echo $result['qty'];?>">
            </div>
            <div class="form-group-1" >
            <label class="detail">SN / Aktiva / PLU</label>
            <textarea class="form-control-2" style="position: relative;top: -12px;" name="detail" placeholder="Keterangan" cols="4"><?php echo $result['detail'];?></textarea>
            </div>
            <div class="form-group-1">
            <label>Pengirim</label>
            <input type="text" name="pengirim" class="form-control-1" placeholder="Pengirim" value="<?php echo $result['pengirim'];?>">
            </div>
             <div class="form-group-1" style="position: relative; left: 50%; top: -60px;">
            <label>Penerima</label>
            <input type="text" name="penerima"  class="form-control-1" placeholder="Penerima" value="<?php echo $result['penerima'];?>">
            </div>
            <div class="form-group-1" style="position: relative; top: -50px;">
            <label>Tujuan Dikirim</label>
            <input type="text" name="tujuan" class="form-control-1" placeholder="Tujuan" value="<?php echo $result['tujuan'];?>">
            <label>Tanggal Pengiriman</label>
            <input type="text" name="tanggal_kirim" style="position: relative;z-index: 9999" readonly="" class="form-control-1" placeholder="Tanggal Kirim" value="<?php echo $result['tanggal_kirim'];?>">
            </div>            
            <div class="form-group-1" style="position: relative; top: -80px;">
            <script >
                function buka_popup(){
                    window.open('lampiran/<?php echo  $result['filename'];?>','','width=640','height=480','menubar=yes','location=yes','scrollbar=yes','status=yes','resizeable=yes','toolbar=no','copyhistory=yes');
                }
            </script>
            <label style="position: relative; top: -95px; left: 50.3%;margin-top: 8px;">Keterangan Barang  <a href="javascript:buka_popup()" title="Buka Surat Jalan"> <i style="font-size: 18px;color: rgba(10,40,100,10);" class="fas fa-image"></i></a> </label>
            <textarea class="form-control-2" name="detail" cols="4"><?php echo $result['ket'];?></textarea>           
            </div>
            <div class="form-group" style="position: relative;top: -70px;margin-bottom: -60px;overflow: hidden;">
            <label>Kondisi Barang</label>
            <input type="text" class="form-control" style="" readonly="" name="type_kirim" value="<?php echo $result['type_kirim'];?>">
            <label>Jenis Surat Jalan</label>
            <input type="text" class="form-control" style="" readonly="" name="type_kirim" value="<?php echo $result['type_sj'];?>">
            <label>Nomor SJ</label>
            <input type="text" class="form-control" readonly="" name="nomor_sj" value="<?php echo $result['nomor_sj'];?>">
            </div>
        </form>  
        <?php } }
?>