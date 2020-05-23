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
                    window.location.href='add-email.php';
                });
            }
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Data Telah ditambahkan",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="add-.php";
                  });
            }
    
      </script>

<?php
  if(isset($_POST['simpan'])){
    $admin = $_POST['admin'];
    $ip = $_POST['ip'];
    $email = $_POST['email'];
    $ket = $_POST['keterangan'];
    if (empty($admin) || empty($ip) || empty($email)) {
        echo "<script type='text/javascript'>
        alert('Ada Data Kosong')
        document.location.href='add-email.php'
        </script>";      
    }else{
     $row = "INSERT INTO email (ip,keterangan,admin,email)VALUES('$ip','$ket','$admin' , '$email')";
    $add = mysqli_query($koneksi,$row);
        echo "<script type='text/javascript'>
          berhasil();
        </script>";        
    }
}


?>