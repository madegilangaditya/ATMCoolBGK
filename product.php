
		<div class="col-md-9 main">
		<!--banner-section-->
		<div class="banner-section">
		<?php
			$id=$_GET['id'];
			$query=mysql_query("select * from tb_kategori where id_kategori=$id");
			$baris=mysql_fetch_array($query);
			$nama=$baris['nama_kategori'];
		?>
		   <h3 class="tittle"><?php echo $baris['nama_kategori']?> <i class="glyphicon glyphicon-user"></i></h3>
			   <!--//banner-->
			  <!--/top-news-->
			  	<?php
					$query1=mysql_query("select * from tb_produk where id_kategori=$id");
					while($baris1 = mysql_fetch_array($query1)){
						echo'  <div class="panel-body">
				<div class="about-content">
				<!-- about -->
							<img src="adminpage/'.$baris1['gambar'].'" alt=" " />
							<h1 style="font-size:22px; font-weight:900;">'.$baris1['nama_produk'].'</h1>
							'.$baris1['desk_produk'].'
										
							<div class="clearfix"></div>

						
				</div>
				 
	            </div>';
					}
				?>
			
				
				
					<!--//top-news-->
		     </div>
			<!--//banner-section-->
<?php
	include "sidebar.php";
?>
			<div class="clearfix"> </div>
	