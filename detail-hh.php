
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
function rupiah($angka){
$hasil_rupiah = "Rp ". number_format($angka,2,',','.');
return $hasil_rupiah;
}
                  
    include "koneksi/koneksi.php";
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysqli_query($koneksi,"SELECT * FROM handheld WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
        <form action="edit-hh.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-group" style="overflow: hidden;">
            <label>Merk</label>
                <input type="text" class="form-control" placeholder="Merk" name="merk" value="<?php echo $result['merk']; ?>">
            <label>Serial Number</label>
                <input type="text" class="form-control" placeholder="Serial Number" name="sn" value="<?php echo $result['sn']; ?>">
            <label>Aktiva</label>
                <input type="text" class="form-control" placeholder="Aktiva" name="aktiva" value="<?php echo $result['aktiva']; ?>">
             <label>Kode Unit</label>
                <input type="text" class="form-control" placeholder="Kode Unit" name="kode" value="<?php echo $result['kode']; ?>">
             <label>Type</label>
                <select name="type" class="form-control">
                    <option><?php echo $result['type']?></option>
                    <option value="">-Pilih Type-</option>
                    <option>MC32 NO</option>
                    <option>MC32 GUN</option>
                </select>
             <label>Tahun Perolehan</label>
                <input type="text" class="form-control" placeholder="Tahun Perolehan"  name="tahun_p" value="<?php echo $result['tahun_p']; ?>">
             <label>Biaya Pendapatan</label>
                <input type="text" class="form-control" placeholder="Biaya Pendapatan" name="biaya_p"  value="<?php echo $result['biaya_p'];?>">
             <label>Nilai Aktiva</label>
                <input type="text" class="form-control" placeholder="Nilai Aktiva" name="nilai_p" value="<?php echo $result['nilai_p'];?>"> <span>
             <label>Tanggal Update</label>
                <input type="text" class="form-control" placeholder="Tanggal Update" id="datetime" name="tgl_update" value="<?php echo $result['tgl_update']; ?>">
             <label>IP</label>
                <input type="text" class="form-control" placeholder="IP" name="ip" value="<?php echo $result['ip']; ?>">
            <label>Posisi</label>
            <select style="height: 5%; width: 100%" name="posisi" class="form-control">
                    <option><?php echo $result['posisi'];?></option>
                    <option value="  " >-Pilih Posisi-</option>
                    <option value="Support">Support</option>
                    <option value="Loading">Loading</option>
                    <option value="KL Fraction">KL Fraction</option>
                    <option value="Bulky Fraction">Bulky</option>
                    <option value="Receiving">Receiving</option>
                    <option value="HO/Supplier">HO/Supplier</option>
                </select>
            <label>Status</label>
            <select  style="height: 5%; width: 100%" name="status" class="form-control">
                    <option ><?php echo $result['status'];?></option>
                    <option value=" ">-Pilih Status-</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Service">Service</option>
                    <option value="Cadangan">Cadangan</option>
                    <option value="Rusak">Rusak</option>
                </select>
            <label>Keterangan</label>
            <textarea class="form-control"  placeholder="Keterangan" name="ket" ><?php echo $result['ket'];?></textarea>
            </div>
            <button class="btn btn-primary"  type="submit">Update</button>
        </form>     
        <?php } }
?>
                <!-- date timepicker-->
                <script>
                $("#datetime-1").datetimepicker();
                </script>
</body>
                <!-- date timepicker-->
                <script>
                $("#datetime").datetimepicker();
                </script>
</html>
