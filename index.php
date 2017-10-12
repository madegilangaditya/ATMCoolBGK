<?php
	include 'adminpage/koneksi.php';
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ATM Cool </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
	<link href="css/style.css" rel='stylesheet' type='text/css' />	
	<link href="css/style2.css" rel='stylesheet' type='text/css' />	
	<script src="js/jquery.min.js"> </script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="all" />
<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<link rel="stylesheet" href="css/slider.css">
<script src="js/owl.carousel.js"></script>
<link rel="stylesheet" href="css/slider.css">
<link rel="shortcut icon" href="gambar/atmcoolicon.png"/>
</head>
<body>
	<!-- header-section-starts -->
    
	<div class="container">
		<div class="header-left grid">
			<div class="grid__item color-1 wow zoomIn">
				<h1><a href="index.php"><i></i><span class="link link--kukuri"></span></a></h1>
			</div>
		</div>
		<div class="header-middle">
			<ul>
				<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> (0361) 710 948</li>
				<li><a href="mailto:dintara.kitchen@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> dintara.kitchen@gmail.com </a></li>
			</ul>
		</div>
	</div>

	<div class="ban-top ">
		<div class="container" style="padding-bottom: 5px; padding-top: 5px;">
			<div class="ban-top-con">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav menu__list">
						<li class="menu__item "><a href="index.php" class="menu__link"><span class="menu__helper">Home</span></a></li>
										<li class="menu__item" class ="dropdown"><a href="index.php?page=about" class="menu__link" ><span class="menu__helper">Company Profile</span></a></li>
										<li class="menu__item" class ="dropdown"><a href="#" class="menu__link"  data-toggle="dropdown" class="dropdown-toggle btn-default"><span class="menu__helper">Product</span></a>
										<ul class="dropdown-menu">
											<?php
												$query=mysql_query("select * from tb_kategori Order by id_kategori ASC");
												while ($baris=mysql_fetch_array($query)){
													echo "<li class='menu__item'><a href='index.php?page=product&id=$baris[id_kategori]' class='menu__dropdown'>$baris[nama_kategori]</a></li>";
												}
											?>
										
										</ul>
										</li>
										<li class="menu__item"><a href="index.php?page=gallery" class="menu__link"><span class="menu__helper">Portofolio</span></a></li>
										<li class="menu__item"><a href="index.php?page=contact" class="menu__link"><span class="menu__helper">Contact Us</span></a></li>
					  </ul>
					</div>
				  </div>
				</nav>	
			</div>
			<div class="top_nav_right">
				<ul>
					<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
					<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
					<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
					<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
					<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
				</ul>	
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<?php 
	if(isset($_GET["page"])){
		$page=$_GET["page"];
		$halaman = "$page.php";
		if(!file_exists($halaman) || empty($page)){
			include"404.php";
		}else{
			include"$halaman";
		}
	}else{
		include"home.php";
	}
?>	
		

<!--/footer-->
	     
<div class="footer">
				 <div class="footer-top">
				    <div class="col-md-6 footer-grid">
					     <h4>About Us </h4>
				          <ul class="bottom">
							 <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</li>
							 
						 </ul>
				    </div>
					<div class="col-md-6 footer-grid">
					     <h4>Address Location</h4>
				           <ul class="bottom">
						     <li><i class="glyphicon glyphicon-map-marker"></i>Jl. Merta Sari 68F, Suwung Batan Kendal Denpasar, 
							 BALI - INDONESIA</li>
							 <li><i class="glyphicon glyphicon-earphone"></i>(0361) 710 948 </li>
							 <li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:dintara.kitchen@gmail.com">dintara.kitchen@gmail.com</a></li>
						   </ul>
				    </div>
					<div class="clearfix"> </div>
				 </div>
	     </div>
<div class="copy">
		    <p>&copy; 2016 ATM Cool. All Rights Reserved | Powered by <a href="http://baligatra.com/">Baligatra</a> </p>
		</div>
		<!--//footer-->
			<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>