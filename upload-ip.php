    <script type="text/javascript" src="sweetalert-master/sweetalert.min.js"></script> 
     <script >
            function kosong(){
                swal({
                    title: "PERHATIAN!",
                    text: "Ada inputan yang kosong",
                    icon: "warning",
                    dangerMode: true,
                    buttons: [false, "OK"],
                }).then(function() {
                    window.location.href='add-ip.php';
                });
            }
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Data Telah ditambahkan",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="add-ip.php";
                  });
            }
    
      </script>
 <?php
  if(isset($_POST['simpan'])){
    $user = $_POST['user'];
    $ip = $_POST['ip'];
    $status =$_POST['status'];
    $posisi = $_POST['posisi'];
    $ket = $_POST['ket'];
    if (empty($user) || empty($ip) || empty($posisi)) {
        echo "<script type='text/javascript'>
        alert('Ada Data Kosong')
        document.location.href='add-ip.php'
        </script>";      
    }else{
     $row = "INSERT INTO ip_dc (ip,ket,user,posisi,status)VALUES('$ip','$ket','$user' , '$posisi','$status')";
    $add = mysqli_query($koneksi,$row);
        echo "<script type='text/javascript'>
                berhasil();
        </script>";        
    }
}


?>