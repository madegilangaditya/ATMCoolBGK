		<div class="col-md-9 main">
		<!--banner-section-->
		<div class="banner-section">
		   
			   <!--//banner-->
			  <!--/top-news-->
			  <div class="top-news">
				<div class="blog">
				<!-- about -->
				   		
						<?php 
							$id = $_GET['id'];
							$query = "SELECT * FROM tb_blog WHERE id_blog = $id ORDER BY id_blog DESC ";
							$result = mysql_query($query);
							$row = mysql_fetch_array($result);
						 ?>
				   		<div class="blog-wrap ">
				   			<div class="blog-img blog-read">				   				
								<img src="<?php echo "adminpage/".$row['image']; ?>" alt=" " width="100%" />
				   			</div>
				   			<div class="blog-text blog-read">				   				
									<h1><?php echo $row['title'] ?></h1>
									<?php echo $row['blog'] ?> 
									
									
								
				   			</div>
				   		</div>						
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
