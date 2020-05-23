
<h4 style="font-family: sans-serif;">Data Export vehicle DC-G001</H4>
<?php  
session_start(); 
$user= $_SESSION['nama'];
date_default_timezone_set('Asia/Jakarta'); 
$waktu = date('Y-m-d/H:i');
echo "<div class='' style='font-family:sans-serif;'>Usernama : $user</div> ";
echo "<div class='' style='font-family:sans-serif;'>Tanggal  : $waktu</div> ";
?>

<table class="table" border="1" >
                                    <thead>

                                        <tr>
                                            <th rowspan="2" >Merk</th>
                                            <th rowspan="2"  >Serial Number</th>
                                            <th rowspan="2" >Aktiva</th>
                                            <th rowspan="2">Tipe</th>
                                            <th colspan="3"> Rincian </th>
                                            <th rowspan="2">Posisi</th>
                                            <th rowspan="2">Tanggal Update</th>
                                            <th rowspan="2">Status</th>
                                            <th rowspan="2">Keterangan</th>
                                        </tr><tr>
                                        <th>Nilai Aktiva</th>
                                        <th>Tahun Perolehan</th>
                                        <th>Biaya Pendapatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
								<?php
                                                function rupiah($angka){
                                                $hasil_rupiah = "Rp ". number_format($angka,2,',','.');
                                                return $hasil_rupiah;
                                                }
											include 'koneksi/koneksi.php';
                  
											$result = mysqli_query($koneksi, "SELECT * FROM vehicle ORDER BY id ");
											while($row = mysqli_fetch_array($result)) {?>
                                        <tr class="">
                                            <td><?php echo $row['merk'];?></td>
                                            <td><?php echo $row['sn'];?></td>
                                            <td><?php echo $row['aktiva'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <td><?php echo rupiah($row['nilai_p']);?></td>
                                            <td><?php echo $row['tahun_p'];?></td>
                                            <td><?php echo rupiah($row['biaya_p']);?></td>
                                            <td><?php echo $row['posisi'];?></td>
                                            <td><?php echo $row['tgl_update'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td><?php echo $row['ket'];?></td>

                                        </tr>
								<?php }?>
                                    </tbody>
                                </table>
                                <script type="text/javascript">
                                    window.print();
                                </script>