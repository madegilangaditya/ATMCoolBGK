<!--//banner-section-->
			<div class="banner-right-text">
			 <h3 class="tittle">Our Product  <i class="glyphicon glyphicon-facetime-video"></i></h3>
			<!--/general-news-->
			 <div class="general-news">
				<div class="general-inner">
					
					 <div class="edit-pics">
					 <?php
						$query=mysql_query("select * from tb_kategori");
						while($baris=mysql_fetch_array($query)){
							echo'<div class="editor-pics">
										 <div class="col-md-3 item-pic">
										   <img src="adminpage/'.$baris['gambar'].'" class="img-responsive" alt="">

										   </div>
											<div class="col-md-9 item-details">
												<h5 class="inner two"><a href="index.php?page=product&id='.$baris['id_kategori'].'">'.$baris['nama_kategori'].'</a></h5>
												 
											 </div>
											<div class="clearfix"></div>
										</div>';
						}
						
						
					?>
								
								
									</div>
								<!--<div class="media">	
								 <h3 class="tittle media">Our Client <i class="glyphicon glyphicon-floppy-disk"></i></h3>
								  <div class="col-md-3 ">
									 <a href="single.html"><img src="gambar/32.png" class="img-responsive" alt=""></a>
							
								  </div>
								  <div class="col-md-3 ">
									 <a href="single.html"><img src="gambar/33.png" class="img-responsive" alt=""></a>
							
								  </div>
								  <div class="col-md-3 ">
									 <a href="single.html"><img src="gambar/34.png" class="img-responsive" alt=""></a>
							
								  </div>
								  <div class="col-md-3 ">
									 <a href="single.html"><img src="gambar/5.png" class="img-responsive" alt=""></a>
							
								  </div>
								  <div class="col-md-3 ">
									 <a href="single.html"><img src="gambar/6.png" class="img-responsive" alt=""></a>
							
								  </div>
								  <div class="col-md-3 ">
									 <a href="single.html"><img src="gambar/7.png" class="img-responsive" alt=""></a>
							
								  </div>
								  <div class="col-md-3 ">
									 <a href="single.html"><img src="gambar/8.png" class="img-responsive" alt=""></a>
							
								  </div>
								  <div class="col-md-3 ">
									 <a href="single.html"><img src="gambar/9.png" class="img-responsive" alt=""></a>
							
								  </div>
								  <div class="col-md-3 ">
									 <a href="single.html"><img src="gambar/10.png" class="img-responsive" alt=""></a>
							
								  </div>
								  <div class="col-md-3 ">
									 <a href="single.html"><img src="gambar/11.png" class="img-responsive" alt=""></a>
							
								  </div>
					         </div>-->

				 </div>
			</div>	
			<!--//general-news-->
			<!--/news-->
			<!--/news-->
		 </div>
			<div class="clearfix"> </div>