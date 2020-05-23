<?php
include '../koneksi/koneksi.php';
?>
<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<body>
<h1>Selamat Datang
<?php
session_start();
echo $_SESSION['nama'];

?>
</h1>
<table width="100%" class="table-hover" border="1" id="dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th rowspan="2" >Merk</th>
                                            <th rowspan="2"  >Serial Number</th>
                                            <th rowspan="2" >Aktiva</th>
                                            <th colspan="2"  >Spesifikasi</th>
                                            <th colspan="2" > Info </th>
                                            <th rowspan="2">Status</th>
                                        </tr>
                                      <tr>
                                        <th>RAM</th>
                                        <th>Procesor</th>
                                        <th>Posisi</th>
                                        <th>IP</th>
                                      </tr>
                                    </thead>
                                    <tbody>
										<?php                  
											$result = mysqli_query($koneksi, "SELECT * FROM komputer WHERE status='rusak' ");
											while($row = mysqli_fetch_array($result)) {?>
                                        <tr class="">
                                            <td><?php echo $row['merk'];?></td>
                                            <td><?php echo $row['sn'];?></td>
                                            <td><?php echo $row['aktiva'];?></td>
                                            <td><?php echo $row['procesor'];?></td>
                                            <td><?php echo $row['ram'];?></td>
                                            <td><?php echo $row['posisi'];?></td>
                                            <td><?php echo $row['ip'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                        </tr>
										<?php }?>
                                    </tbody>
                                </table>
</body>
</html>