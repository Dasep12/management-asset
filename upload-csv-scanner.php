<link rel="stylesheet" type="text/css" href="css/style.css">
<form action="upload_csv/import-scanner.php" method="POST" enctype="multipart/form-data">
<div class="upload">
<input  type="file"  name="file_excel" class="form-control-12" >
</div>
<br>
<button type="submit" name="btn_submit" class="btn btn-success btn-sm" id="btn_submit"><i class="fa fa-file-excel"></i> Upload</button>
<a href="format-upload-scanner.php?file=scanner.xlsx" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i> Lihat Format</a>
</form>