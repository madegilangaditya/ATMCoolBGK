		<div class="col-md-9 main">
		<!--banner-section-->
		<div class="banner-section">
		   
			   <!--//banner-->
			  <!--/top-news-->
			  <div class="top-news">
				<div class="blog">
				<!-- about -->
				   		<h3 class="tittle">Blog</h3>
						<?php 
							$query = "SELECT * FROM tb_blog ORDER BY id_blog DESC";
							$result = mysql_query($query);
							while ($row = mysql_fetch_array($result)) {	
						 ?>
				   		<div class="blog-wrap">
				   			<div class="blog-img">				   				
								<img src="<?php echo "adminpage/".$row['image']; ?>" alt=" " width="100%" />
				   			</div>
				   			<div class="blog-text">				   				
									<h1><?php echo $row['title'] ?></h1>
									<?php echo $row['description'] ?> 
									<br>
									<a href="index.php?page=read&id=<?php echo $row['id_blog'] ?>" class="button-blog"> Read More</a>
									
								
				   			</div>
				   		</div>
						<?php } ?>
				</div>
				 
	            </div>
					<!--//top-news-->
		     </div>
<?php
	include "sidebar.php";
?>
			<!--//general-news-->
			<!--/news-->
			<!--/news-->
		 </div>
			<div class="clearfix"> </div>
