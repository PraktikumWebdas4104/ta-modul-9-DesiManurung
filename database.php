<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "jurnal9_desi"; //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->uname,$this->pass,$this->db);
		//mysqli_select_db($this->db);
		 //buatlah koneksi secara OOP
		
	}

	function tampil_data(){
		$data = mysqli_query($this->conn,"SELECT  * from user");


		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia,$genre,$wisata){
		$genre = implode(", ", $genre);
		$wisata = implode(", ", $wisata);
		mysqli_query($this->conn,"INSERT  into user values ('','$nama','$alamat','$usia','$genre','$wisata')");
		
		//buatlah method input
		//query inset into user
	}

	function hapus($id){
		mysqli_query($this->conn,"DELETE from user where id ='$id'") ;
		

		//buatlah method hapus
		//query delete from id where id ='$id'
	}

	function edit($id){
		$data = mysqli_query($this->conn,"SELECT * from user where id='$id'");
		//lengkapilah method edit
		//query select from user where id ='$id'
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia,$genre,$wisata){
		$genre = implode(", ", $genre);
		$wisata = implode(", ", $wisata);
		mysqli_query($this->conn,"UPDATE user set nama='$nama',alamat='$alamat',usia='$usia' genre='$genre' wisata='$wisata' WHERE id='$id'");
		//buatlah method update
		//query update user set blablabla where id='$id'
	}

} 

?>