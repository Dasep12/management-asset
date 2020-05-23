<?php

class edit_Profile{

	public $folder ;
	public $filename;
	public $filesize;
	public $ekstensi ;
	public $pass ;
	public $tmp ;


	public function Edit(){
		include 'koneksi/koneksi.php';
		if (isset($_POST['update'])) {
			$id = $_POST['id'];
			$this->folder = 'login/file/';
			$this->filename = $_FILES['filename']['name'];
			$this->tmp = $_FILES['filename']['tmp_name'];
			$this->ekstensi = array('jpg','jpeg','png');

			$explode = explode('.', $this->filename );
			$ekstensi2 = $explode[count($explode)-1];
				if (!in_array($ekstensi2, $this->ekstensi)) {
					echo "<script>
							alert('Ekstensi Tidak Diijinkan');
							document.location.href='profil.php';
						  </script>
					";
				}else{
				if (move_uploaded_file($this->tmp, $this->folder . $this->filename)) {
					$sql = "UPDATE user set filename='$this->filename' , folder='$this->folder' WHERE id='$id' ";
				$qry = $koneksi->query($sql);
					echo "<script>
							alert('Terupdate');
							document.location.href='profil.php';
						  </script>
					";
				
				}
		}
}

	}

}


?>