		<div class="col-md-9 main">
		<!--banner-section-->
		<div class="banner-section">
		   
			   <!--//banner-->
			  <!--/top-news-->
			  <div class="top-news">
				<!-- about -->
				   		
				<?php 
					$id = $_GET['id'];
					$query = "SELECT * FROM tb_page WHERE id_page = $id  ";
					$result = mysql_query($query);
					$row = mysql_fetch_array($result);
				 ?>
				<h3 class="tittle"><?php echo $row['title'] ?></h3>
				<div class="blog">
				   		<div class="blog-wrap ">
				   			<div class="blog-img blog-read">				   				
								<img src="<?php echo "adminpage/".$row['image']; ?>" alt=" " width="100%" />
				   			</div>
				   			<div class="blog-text blog-read">				   				
																		<?php echo $row['article'] ?> 
									
									
								
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
