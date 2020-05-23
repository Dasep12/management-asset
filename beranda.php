<?php
include 'header.php';
?>
<nav class="tanggal" style="margin-top: -12px;">
<span style="letter-spacing: .2em;text-align: center;margin-left: 60px;"><i class="fa fa-home"></i> Beranda</span>
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
<div class="baik">
<h4>All Peralatan Baik</h4>
<table class="table-bordered" width="100%" border="1">
<?php
    include 'info-beranda.php';
?>
    <thead>
        <th>Nama Barang</th>
        <th>Total Jumlah Baik</th>
        <th>Total Nilai Aktiva</th>
    </thead>
        <tbody>
            <tr>
                <td>Handheld</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Printer</td>
                <td><?= $printer ?></td>
                <td><?= 'Rp. '. number_format($query_prt['SUM(nilai_aktiva)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Intermac</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Komputer</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Vehicle</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Monitor</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Scanner</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
        </tbody>
    <td colspan="2" bgcolor="black" style="color: #fff">Grand Total</td><td bgcolor="black" style="color: #fff">
        <?=
         "Rp. ". number_format($row['SUM(nilai_p)'] + $row['SUM(nilai_p)'] + $row['SUM(nilai_p)'] + $row['SUM(nilai_p)'] + $row['SUM(nilai_p)'] + $row['SUM(nilai_p)']);

        ?>
    </td>
</table>
</div>

<div class="rusak">
<h4>All Peralatan Rusak</h4>
<table class="table-bordered" width="100%" border="1">
<?php
    include 'info-beranda.php';
?>
    <thead>
        <th>Nama Barang</th>
        <th>Total Jumlah Baik</th>
        <th>Total Nilai Aktiva</th>
    </thead>
        <tbody>
            <tr>
                <td>Handheld</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Printer</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Intermac</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Komputer</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Vehicle</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Monitor</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Scanner</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
        </tbody>
    <td colspan="2" bgcolor="black" style="color: #fff">Grand Total</td><td bgcolor="black" style="color: #fff"></td>
</table>
</div>

<div class="service">
<h4>All Peralatan Rusak</h4>
<table class="table-bordered" width="100%" border="1">
<?php
    include 'info-beranda.php';
?>
    <thead>
        <th>Nama Barang</th>
        <th>Total Jumlah Baik</th>
        <th>Total Nilai Aktiva</th>
    </thead>
        <tbody>
            <tr>
                <td>Handheld</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Printer</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Intermac</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Komputer</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Vehicle</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Monitor</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Scanner</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
        </tbody>
    <td colspan="2" bgcolor="black" style="color: #fff">Grand Total</td><td bgcolor="black" style="color: #fff"></td>
</table>
</div>

<div class="cadangan">
<h4>All Peralatan Cadangan</h4>
<table class="table-bordered" width="100%" border="1">
<?php
    include 'info-beranda.php';
?>
    <thead>
        <th>Nama Barang</th>
        <th>Total Jumlah Baik</th>
        <th>Total Nilai Aktiva</th>
    </thead>
        <tbody>
            <tr>
                <td>Handheld</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Printer</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Intermac</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Komputer</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Vehicle</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Monitor</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
            <tr>
                <td>Scanner</td>
                <td><?= $h ?></td>
                <td><?= 'Rp. '. number_format($row['SUM(nilai_p)'],0) ; ?></td>
            </tr>
        </tbody>
    <td colspan="2" bgcolor="black" style="color: #fff">Grand Total</td><td bgcolor="black" style="color: #fff"></td>
</table>
</div>

</div>

</body>
<!--Footer-->

<?php
include 'footer.php';
?>
</html>