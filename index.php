<?php
include 'include/header2.php';

$qry_product = $conn->query("SELECT * FROM products ");

// $qry_product2 = mysqli_query($conn,"SELECT * FROM products WHERE email='$userdata' or username= '$userdata' ");

// $result = mysqli_num_rows($conn, $qry_product2);




?>

<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				<div class="grid portfoliogrid">
				<?php

while ($fetch = $qry_product->fetch_assoc()) {
					echo '<article class="hentry">
					<header class="entry-header">
					<div class="entry-thumbnail">
						<a href="portfolio-item.html"><img src="https://cdn.vox-cdn.com/thumbor/OZ6AGLlDrayjRpaCj-H_70cUcB0=/1400x0/filters:no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/22279295/mchin_190429_4395_0002.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/></a>
					</div>
					<h2 class="entry-title"><a href="#" rel="bookmark">'.$fetch['product'].'</a></h2>
					<span class="price lblue">&#x20A6;'.$fetch['price'].'</span>
					
						<a class="button button-primary bg-blue" href="#">Add to cart</a>
					
					</header>
					</article>';
			
		
		
				}
								?>
					
				</div>
				<!-- .grid -->
				
				
				<br/>
				
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>



 

				

			<br>


<?php

include 'include/footer.php';
?>