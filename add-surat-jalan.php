<?php
include 'header.php';
?>
<nav class="tanggal" style="margin-top: -12px;">
<span>Beranda / Surat Jalan / Entri SJ</span>
 <li>
<?php
include 'waktu.php';
?>
<div class="waktu">
<div class="wib"></div><div class="hari" id="output"></div>
</div>
 </li>
</nav>
<?php
include 'sidebar.php';
?>


<div id="container">
						 <!-- Calender -->
		<link rel="stylesheet" type="text/css" href="calender/jquery.datetimepicker.min.css">
		<script type="text/javascript" src="calender/jquery.js"></script>
		<script type="text/javascript" src="calender/jquery.datetimepicker.full.js"></script>
  <div class="box-header">
    <h5>Entri Surat Jalan</h5>
    </div>
    <div class="box-add">
      <form  enctype="multipart/form-data" name="datetimepicker" action="" method="POST">
        <label>Unit</label><input type="text" class="box-input" style="width: 40%;"   placeholder="Nama Barang" name="nama_barang" >
        <label>NO Surat Jalan</label><input type="text"   style="width: 60%;" class="box-input" placeholder="NO SJ" name="nomor_sj"  >
        <label>Pengirim</label><input type="text"  class="box-input" style="width: 34%;" placeholder="Pengirim" name="pengirim" >
        <label>Penerima</label><input type="text"  class="box-input" style="width: 34%;" placeholder="Penerima" name="penerima" >
        <label>Tujuan</label>
           <select style="width: 25%; color: #321;"  name="tujuan" class="box-input">
            <option value=""> Pilih Tujuan </option>
            <option value="HO/Supllier">HO/Supplier</option>
            <option value="GA">GA</option>
            <option value="Support">Support</option>
          </select>
        <label>Tipe Surat Jalan</label>
        <select  style="width: 26%;" name="type_sj" class="box-input">
            <option value=" ">Pilih <TIME></TIME>pe SJ</option>
            <option value="Masuk">Masuk</option>
            <option value="Keluar">Keluar</option>
        </select>
        <label>Detail Unit</label><textarea  style="width: 80%;" class="box-input" placeholder="SN/Aktiva/PLU" name="detail" ></textarea>
        <label>Tanggal Kirim</label><input type="text" id="datetime"  class="box-input" name="tanggal_kirim"  placeholder="Tanggal">
        <label>QTY</label><input type="number" style="width: 10%;"   class="box-input" name="qty"  placeholder="QTY">
        <label>Tipe Kirim</label>
          <select  style="width: 28%;" name="type_kirim" class="box-input">
              <option value="">-Status Barang-</option>
              <option value="Service Rusak">Service Rusak</option>
              <option value="Selesai Service">Selesai Service</option>
              <option value="Datang Baru">Datang Baru</option>
              <option value="Peminjaman">Peminjaman</option>
        </select>
        <label>Lampiran</label><input type="file" name="filename" style="width: 20%;" class="box-input" >
        <span class="notice"><i>Note *Lampiran Berupa Surat Jalan Hasil Scan*</i></span>

        <label>Keterangan</label><textarea  style="width: 80%;" class="box-input" placeholder="isi jika ada" name="ket" ></textarea>
          <div class="tambah"><button onclick="swal" type="submit" class="btn btn-primary btn-sm" value="Simpan" name="simpan">Simpan <a class="fa fa-check"></a></button>
          <a style="z-index: 999;position: relative; " class="btn btn-danger btn-sm" href="surat-jalan.php" target="_new">View <i class="fa fa-eye"></i></a>
          </div>
    </div>
  </form>
  <?php
    include 'upload-sj.php';

  ?>
    </div>
</div>

				<!-- date timepicker-->
				<script>
				$("#datetime").datetimepicker();
				</script>
</body>
<?php
include 'footer.php';
?>
</html>