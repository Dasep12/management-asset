
<!DOCTYPE html>
<html>
<head>
    <title></title>
                             <!-- Calender -->
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
        <form class="pinjam" action="update-pinjam.php" method="post">
        <input type="hidden" class="form-new" name="status" value="Dipinjamkan" placeholder="isi nama peminjam">
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
        <input type="hidden" class="form-new" name="support">
        <input type="hidden" class="form-new" name="jam_keluar" value=<?php date_default_timezone_set('Asia/Jakarta'); echo date('h:i:s'); ?>>
            <ul>
            <li>
               <label>Kode Unit</label><input readonly="" type="text" class="form-new" placeholder="Kode unit" value="<?php echo $result['kode'];?>">
            </li>
            <li>
            <label>Serial Number</label><input readonly="" type="text" class="form-new" placeholder="serial number" value="<?php echo $result['sn'];?>">
            </li>
            <li>
            <label>Posisi</label>
                <select class="form-new" name="posisi">
                    <option value="">-Posisi Di Pinjam-</option>
                    <option>Receiving</option>
                    <option>Kl Fraction</option>
                    <option>BIC</option>
                    <option>Loading</option>
                    <option>Warehouse</option>
                </select>
            </li>
            <li>
            <label>Peminjam</label><input type="text" name="peminjam" class="form-new" placeholder="isi nama peminjam">
            </li>
            <li>
            <label>Tanggal Peminjaman</label><input name="tanggal_pinjam" type="text" id="datetime" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d');?>" class="form-new" placeholder="isi nama peminjam">
            </li>
            </ul>
           <button class="btn btn-primary btn-sm"  type="submit"><a class="fa fa-share"></a>  Pinjamkan</button>
        </form>     
        <?php } }
?>
                <!-- date timepicker-->
                <script>
                $("#datetime").datetimepicker();
                </script>
</body>

</html>
