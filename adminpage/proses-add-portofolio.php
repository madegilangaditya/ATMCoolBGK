<?php
	session_start();
	if($_SESSION['username']==''){
		header('Location:login.php');
	}
	if($_POST){include "koneksi.php";
			$nama=$_POST ['nama'];
			$folder = "images/atmcool";
			$tmp_name = $_FILES["gambar"]["tmp_name"];
			$name = $folder."/".$_FILES["gambar"]["name"];
			move_uploaded_file($tmp_name, $name);	
	$hasil = mysql_query("
			INSERT INTO tb_portofolio
			(port_tittle,gambar)
			VALUES
			('$nama','$name')
		") or die(mysql_error());
		//echo "<script>alert('Masukan Produk Berhasil'); location.href='admin.php?page=data-produk'</script>";
		header('location: admin.php?page=data-portofolio');
	}else{
		header('location: admin.php?page=data-portofolio');
	}		
?>