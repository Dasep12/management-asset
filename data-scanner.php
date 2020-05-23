
                                <table width="100%" border="1" >
                                    <thead>
                                        <tr>
                                          <th rowspan="2">Merk</th>
                                          <th rowspan="2">Tipe</th>
                                          <th colspan="3">Detail</th>
                                          <th colspan="3">Bill</th>
                                          <th rowspan="2">Status</th>
                                          <th rowspan="2">Tanggal Update</th>
                                          <th rowspan="2">Keterangan</th>
                                        </tr>
                                        <th>Serial Number</th>
                                        <th>Aktiva</th>
                                        <th>Posisi</th>
                                        <th>Tahun Pendapatan</th>
                                        <th>Biaya Perolehan</th>
                                        <th>Nilai Aktiva</th>
                                      </thead>
                                    <tbody>
                    <?php
                      include 'koneksi/koneksi.php';
                      $result = mysqli_query($koneksi, "SELECT * FROM scanner ");
                      while($row = mysqli_fetch_array($result)) {?>
                                        <tr class="">
                                            <td><?php echo $row['merk'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <td><?php echo $row['sn'];?></td>
                                            <td><?php echo $row['aktiva'];?></td>
                                            <td><?php echo $row['posisi'];?></td>
                                            <td><?php echo $row['tahun_p'];?></td>
                                            <td><?php echo $row['biaya_p'];?></td>
                                            <td><?php echo $row['nilai_aktiva'];?></td>
                                             <td><?php 
                                                  if ($row['status']=='Rusak') {
                                                      echo "<div class='label-danger' >" .$row['status']. "</div>";
                                                  }else{
                                                    if ($row['status']=='Cadangan') {
                                                      echo "<div class='label-warning' >" .$row['status']. "</div>";
                                                    }elseif($row['status']=='Service'){
                                                        echo "<div class='label-info' >" .$row['status']. "</div>";
                                                    }elseif ($row['status']=='Aktif') {
                                                      echo "<div class='label-success' >" .$row['status']. "</div>";
                                                    }
                                                  }
                                                ?>
                                              </td>
                                              <td><?= $row['tgl_update']?></td>
                                              <td><?= $row['ket']?></td>
                                        </tr>
                    <?php }?>
                                    </tbody>
                                </table>
                        <script>
                          window.print();
                        </script>