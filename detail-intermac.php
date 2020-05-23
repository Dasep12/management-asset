
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
        $sql = mysqli_query($koneksi,"SELECT * FROM intermac WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
        <form action="edit-intermac.php" method="post">
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
                <input type="text" name="type" class="form-control" placeholder="Tipe Intermac" value="<?php echo $result['type']?>">
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
                    <option value=" ">-Pilih Posisi-</option>
                    <option value="Zona 6">Zona 6</option>
                    <option value="Zona 7">Zona 7</option>
                    <option value="Zona 8">Zona 8</option>
                    <option value="Zona 9">Zona 9</option>
                    <option value="Zona 10">Zona 10</option>
                    <option value="Zona 11">Zona 11</option>
                    <option value="Zona 12">Zona 12</option>
                    <option value="Zona 13">Zona 13</option>
                    <option value="Zona 14">Zona 14</option>
                    <option value="Zona 15">Zona 15</option>
                    <option value="Zona 16">Zona 16</option>
                    <option value="Zona 17">Zona 17</option>
                    <option value="Zona 18">Zona 18</option>
                    <option value="Zona 19">Zona 19</option>
                    <option value="Zona 20">Zona 20</option>
                    <option>Support</option>
                    <option>HO/Supplier</option>
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
</body>
                <!-- date timepicker-->
                <script>
                $("#datetime").datetimepicker();
                </script>
</html>
