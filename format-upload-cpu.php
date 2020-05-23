<?php
if (isset($_GET['file'])) {
	$filename = $_GET['file'];

	$folder = 'format-upload/';
	$file = $folder. $filename;

	if (file_exists($file)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; file='.basename($file));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: private');
		header('Pragma: private');
		header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		readfile($file);
		
		exit;
	} 
	else {
		$_SESSION['pesan'] = "Oops! File - $filename - not found ...";
		header("location:upload-csv-komputer.php");
	}
}
?>