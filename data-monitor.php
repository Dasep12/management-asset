<h4 style="font-family: sans-serif;">Data Export Monitor DC-G001</H4>
<?php  
session_start(); 
$user= $_SESSION['nama'];
date_default_timezone_set('Asia/Jakarta'); 
$waktu = date('Y-m-d/H:i');
echo "<div class='' style='font-family:sans-serif;'>Usernama : $user</div> ";
echo "<div class='' style='font-family:sans-serif;'>Tanggal  : $waktu</div> ";
?>

<table border="1" class="table ">
    <thead>
        <tr>
            <th rowspan="2" >Merk</th>
            <th rowspan="2" >Serial Number</th>
            <th rowspan="2" >Aktiva</th>
            <th colspan="3" >Detail</th>
            <th rowspan="2">Status</th>
            <th rowspan="2">Posisi</th>
            <th rowspan="2">Tanggal Update</th>
            <th rowspan="2">Keterangan</th>
        </tr>
        <th>Tahun Perolehan</th>
        <th>Biaya Pendapatan</th>
        <th>Nilai Aktiva</th>
  </thead>
	<?php
		include 'koneksi/koneksi.php';
	$data = mysqli_query($koneksi,"SELECT * FROM monitor");
	while ($row = mysqli_fetch_array($data)) { ?>
		<tr>
			<td><?=$row['merk'];?></td>
			<td><?=$row['sn'];?></td>
			<td><?=$row['aktiva'];?></td>
			<td><?=$row['tahun_p'];?></td>
			<td><?=$row['biaya_p'];?></td>
			<td><?=$row['nilai_aktiva'];?></td>
			<td><?=$row['status'];?></td>
			<td><?=$row['posisi'];?></td>
			<td><?=$row['tgl_update'];?></td>
			<td><?=$row['ket'];?></td>
		</tr>
		
<?php } ?>	
</table>
<script type="text/javascript">
	window.print();
</script>