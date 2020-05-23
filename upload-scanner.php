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
                    window.location.href= 'add-pc.php';
                })
            }
            function berhasil() {
                swal({
                    title: "BERHASIL",
                    text: "Data Telah ditambahkan",
                    icon: "success",
                    buttons: [false, "OK"],
                  }).then(function() {
                    window.location.href="add-pc.php";
                  });
            }
            function ketemu(){
                swal({
                    title: "PERHATIAN!",
                    text: "Data sudah ada",
                    icon: "warning",
                    dangerMode: true,
                    buttons: [false, "OK"],
                }).then(function() {
                    window.location.href= 'add-pc.php';
                })
            }
      </script>

<?php
include'koneksi/koneksi.php';
    if(isset($_POST['simpan'])){
        $merk=$_POST['merk'];
        $sn=$_POST['sn'];
        $aktiva=$_POST['aktiva'];
        $ram=$_POST['ram'];
        $procesor=$_POST['procesor'];
        $ip=$_POST['ip'];
        $posisi=$_POST['posisi'];
        $status=$_POST['status'];
        $tahun=$_POST['tahun_p'];
        $biaya=$_POST['biaya_p'];
        $nilai_aktiva=$_POST['nilai_aktiva'];
        $ket=$_POST['ket'];
        $update=$_POST['tgl_update'];
        $data = mysqli_query($koneksi,"SELECT * FROM scanner WHERE ip='$_POST[ip]' or sn='$_POST[sn]'");
        $count = mysqli_num_rows($data);
            if($count>0){
                    echo"<script>
                        ketemu();
                    </script>";
            }elseif(empty($sn) || empty($ip) || empty($posisi) || empty($aktiva) || empty($ket)){
                    echo"<script type='text/javascript'>
                        kosong();
                    </script>";                
            }else{

                    $qry="INSERT INTO scanner(merk,sn,aktiva,posisi,status,tahun_p,biaya_p,nilai_aktiva,ket,tgl_update)VALUES('$merk','$sn','$aktiva','$posisi','$status','$tahun','$biaya','$nilai_aktiva','$ket','$update')";
                    $add = mysqli_query($koneksi,$qry);        
                    echo"<script>
                            berhasil();
                    </script>"; 
            }        
         } 
      ?>

