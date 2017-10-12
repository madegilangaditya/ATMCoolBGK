
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".top-menu ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 	
					
	<div class="col-md-9 main">
	  <!--grids-->
	   <div class="gallery-section">
	     <h3 class="tittle" style="font-size:3em; margin-left:.2em;">Portofolio <i class="glyphicon glyphicon-fullscreen"></i></h3>
         <div class="categorie-grids cs-style-1">
				
				 <?php
					$query1=mysql_query("select * from tb_portofolio");
					while($baris1 = mysql_fetch_array($query1)){
						echo' <div class="col-md-4 cate-grid grid">  
						<figure>
						<img src="adminpage/'.$baris1['gambar'].'" alt="">
						<figcaption>
							<h3>ATM Cool</h3>
							<span>'.$baris1['port_tittle'].'</span>
							<a class="example-image-link" href="adminpage/'.$baris1['gambar'].'" data-lightbox="example-1" data-title="'.$baris1['port_tittle'].'">VIEW</a>
						</figcaption>
					</figure>
					</div>';
					}
				?>
					
				 

 <script src="js/lightbox.js"></script>
			 <div class="clearfix"></div>
		 </div>
	 </div>
     <div class="clearfix"> </div>
	