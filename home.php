		<div class="banner">
                 
					<ul class="rslides" id="slider4">
					       <li>
							  <img src="gambar/1.jpg" class="img-responsive" alt="" />

							</li>
							<li>
								 <img src="gambar/2.jpg" class="img-responsive" alt="" />


							</li>
							<li>
							 <img src="gambar/5.jpg" class="img-responsive" alt="" />

							
							</li>

						</ul>
					
					<!--banner-->
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
		 <div class="clearfix"> </div>
			   
			 </div>
	

	<div class="col-md-12 main">
		<!--banner-section-->
		<div class="banner-section">
		   <h3 class="tittle">Welcome to ATM COOL <i class="glyphicon glyphicon-picture"></i></h3>
			
			   <!--//banner-->
			  <!--/top-news-->
			  <div class="top-news">
				<div class="top-inner">
					<div class="col-md-5 top-text">
						 <a href="index.php?page=about"><img src="gambar/port003.jpg" class="img-responsive" alt=""></a>
						    
					 </div>
					 <div class="col-md-7 top-text">
					 <h5 class="top"><a href="index.php?page=about">About Us</a></h5>
							<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
						    <div class="more" style="padding-top:25px;">
							<a href="index.php?page=about">Read More</a>
						</div>
					</div>
					
					 <div class="clearfix"> </div>
				 </div>
				 
				 <div class="top-inner second">
				  <h3 class="tittle">Our Service <i class="glyphicon glyphicon-picture"></i></h3>
					<div class="col-md-6 top-text">
						 <a ><img src="gambar/port001.jpg" class="img-responsive" alt=""></a>
						    <h5 class="top"><a >Consetetur sadipscing elit</a></h5>
							<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
						   
					 </div>
					<div class="col-md-6 top-text two">
						 <a ><img src="gambar/port002.jpg" class="img-responsive" alt=""></a>
						    <h5 class="top"><a >Consetetur sadipscing elit</a></h5>
							<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
						
					 </div>
					 
					 <div class="clearfix"> </div>
				 </div>
				 
				 
	            </div>
					<!--//top-news-->
		     </div>
<?php
	include "sidebar.php";
?>
	
		
<div class="clearfix"> </div>
</div>
<div class="clearfix"> </div>