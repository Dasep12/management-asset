<?php

	class Get_ID{

		public $row ;
		public $qry ;
		public $data;

			public function Ambil_id(){
				include 'koneksi/koneksi.php';

				$this->row = "SELECT * FROM history_pinjamhh WHERE id ";
				$this->qry = $koneksi->query($this->row);
				while ($r = mysqli_fetch_array($this->qry)) {
					echo $r['id'];
				}
			}

	}


?>