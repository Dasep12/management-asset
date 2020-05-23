
<!DOCTYPE html>
<html>
<head>
    <title></title>
                             <!-- Calender -->
        <link rel="stylesheet" type="text/css" href="fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
        $sql = mysqli_query($koneksi,"SELECT * FROM handheld WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
        <form class="pinjam" action="pengembalian-hh.php" method="post">
        <input type="hidden" class="form-new" name="tanggal_balik" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d');?>">
        <input type="hidden" class="form-new" name="status" value="Cadangan">
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
        <input type="hidden" name="aktiva" value="<?php echo $result['aktiva']; ?>">
        <input type="hidden" name="sn" value="<?php echo $result['sn']; ?>">
        <input type="hidden" class="form-new" value="<?= $result['support'] ?>" name="support">
        <input type="hidden" class="form-new" name="dikembalikan" value="kembali">
        <input type="hidden" class="form-new" name="posisi_sebelumnya" value="<?php echo $result['posisi'];?>">
            <ul>
            <li>
               <label>Kode Unit</label><input readonly="" type="text" name="kode" class="form-new" placeholder="Kode unit" value="<?php echo $result['kode'];?>">
            </li>
            <li>
            <label>Serial Number</label><input readonly="" type="text" class="form-new" placeholder="serial number" value="<?php echo $result['sn'];?>">
            </li>
            <li>
            <label>Posisi Awal</label>
                <select class="form-new" name="posisi">
                    <option value="Support"> <?php echo $result['posisi'];?></option>
                </select>
            </li>
            <li>
            <label>Peminjam</label><input type="text" name="peminjam" class="form-new" placeholder="isi nama peminjam" value="<?php echo  $result['peminjam'];?>">
            </li>
            <li>
            <label>Tanggal Peminjaman</label><input name="tanggal_pinjam" type="text"  readonly="" value="<?php echo $result['tanggal_pinjam'];?>" class="form-new">
            </li>
            </ul>
                <button class="btn btn-primary btn-sm"  type="submit">Dikembalikan</button>
        </form>     
        <?php } }
?>
                <!-- date timepicker-->
                <script>
                $("#datetime").datetimepicker();
                </script>
</body>

</html>
