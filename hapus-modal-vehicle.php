
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
h4{
    font-family: terminal;
    color: #001;
}
span {
    margin-top: -12px;
}
</style>
    <title></title>
                             <!-- Calender -->
        <link rel="stylesheet" type="text/css" href="calender/jquery.datetimepicker.min.css">
        <script type="text/javascript" src="calender/jquery.js"></script>
        <script type="text/javascript" src="calender/jquery.datetimepicker.full.js"></script>
        <script defer src="fontawesome-free-5.0.2/svg-with-js/js/fontawesome-all.min.js"></script>
</head>
<body>

<?php
                 
    include "koneksi/koneksi.php";
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysqli_query($koneksi,"SELECT * FROM vehicle WHERE id = $id");
        while ($result = mysqli_fetch_array($sql)){
        ?>
                <center>
                <h1><i style="color: rgba(250,12,0,0.8);font-size: 90px;" class="fa fa-trash"></i></h1>
                    <h6>Yakin hapus?Data yang terhapus tak bisa di recover</h6><br>
                    <a href="delete-vehicle.php?id=<?=$result['id']?>" ><button style="width: 90%" class="btn btn-primary btn-sm"  type="submit">Ya, saya ingin menghapus data ini permanen</button></a><br>
                    <button  style="margin-bottom: -12px;" type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Tidak,saya belum siap untuk kehilangan data ini</button> <br><br>
                </center>
        <?php } }
?>
</body>
</html>
