<?php
	include("header.php");
	include("menu1.php");
?>

 <section class="ftco-section">
    <div class="container">

		<div class="row">
			<?php
			include("detialDB.inc.php");
	$query = "SELECT * FROM added_item";
	$result = mysqli_query($mysqli_conn, $query);
		while($row=mysqli_fetch_assoc($result))
		{
			$a=$row['food_id'];
		 $b=$row['food_name'];
		 $r=$row['fcalories'];
		 $c=$row['protien'];
		 $d=$row['fat'];
		 $e=$row['saturatedfat'];
		 $f=$row['polyfat'];
		 $g=$row['monofat'];
		 $h=$row['Tfat'];
		 $i=$row['cholesterol'];
		$food_item = $row['fileName'];
		$j = $row['sodium'];
		$k = $row['potassium'];
		$l = $row['tcarbo'];
		$m = $row['dfiber'];
		$n = $row['sugar'];
		$o = $row['pre'];
		echo"";
			echo"
			<div class='col-md-6 col-lg-3 ftco-animate'>
    				<div class='product'>
    					<a href='Fullitemdis.php?item=$a' class='img-prod'><img class='img-fluid' src='../Personal-Admin/production/$food_item' alt='Colorlib Template'>
    						<div class='overlay'></div>
    					</a>
    					<div class='text py-3 pb-4 px-3 text-center'>
    						<h3><a href='#'>$b</a></h3>
    						<div class='d-flex'>
    							<div class='pricing'>
		    						<p class='price'><span>Calories:$r</span></p>
									<p class='price'><span>Protien:$c</span></p>
		    					</div>
	    					</div>
    						
    					</div>
    				</div>
    			</div>";
			
		}
	?>
				
				
		</div>
	</div>
</section>

<?php
	include("footer.php");
?>