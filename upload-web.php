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
                    window.location.href='add-web.php';
                });
            }
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Data Telah ditambahkan",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="add-web.php";
                  });
            }
    
      </script>


<?php
 if(isset($_POST['simpan'])){
    $web = $_POST['web'];
    $link = $_POST['link'];
    $ket = $_POST['ket'];
 if(empty($link) || empty($web) || empty($ket)){ ?>
    <script>
      alert('Gagal');
      document.location.href='add-web.php';
    </script>
<?php }else{
      $add1 = "INSERT INTO web_dc (web,link,ket)VALUES('$web','$link','$ket')" ;
      $qry = mysqli_query($koneksi,$add1);
      }  ?>
      <script>
        berhasil();
      </script>
<?php } ?>
