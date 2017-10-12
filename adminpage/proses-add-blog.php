<?php
	session_start();
	if($_SESSION['username']==''){
		header('Location:login.php');
	}
			include "koneksi.php";
			$title=$_POST ['title'];
			$description=$_POST ['description'];
			$blog=$_POST ['article'];
			$image=$_POST ['image'];

			$folder = "images/atmcool";
			$tmp_name = $_FILES["images"]["tmp_name"];
			$img_name = $folder."/".$_FILES["images"]["name"];
			move_uploaded_file($tmp_name, $img_name);	
			$query = mysql_query("INSERT INTO tb_blog (title,description,blog,image) VALUES ('$title','$description','$blog','$img_name') ");
			
			header('location: admin.php?page=data-blog');	
	
			
?>