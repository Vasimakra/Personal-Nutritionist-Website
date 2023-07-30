<?php
	include("header.php");
	include("menu1.php");
?>
<section class="ftco-section">
    <div class="container">
		<div class="row">
			<?php
			include("detialDB.inc.php");
			$query = "SELECT * FROM addrecipe";
			$result = mysqli_query($mysqli_conn, $query);
				while($row = mysqli_fetch_assoc($result))
				{
			?>
			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="Fullrecipedis.php?item=<?php echo $row['food_id']; ?>" class="img-prod"><img class="img-fluid" src="../Personal-Admin/production/<?php echo $row['fileName'];?>" alt="Colorlib Template">
    						
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo $row['food_name'];?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p><span class="mr-2 price-dc">Preparation Time : <?php echo $row['Ptime'];?></span><span class="price-sale">Cooking time : <?php echo $row['cooktime'];?></span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						
    						</div>
    					</div>
    				</div>
    			</div>
			
			
			
			
			<?php
				}
			?>

		</div>
	</div>
</section>
<?php
	include("footer.php");
?>