<?php
	include("header.php");
	include("menu1.php");
?>
<?php
include("detialDB.inc.php");
if(isset($_GET['item']))
{
	$item = $_GET['item'];
	$query = "SELECT * FROM added_item where food_id=$item";
	$result = mysqli_query($mysqli_conn, $query);
	$res= mysqli_fetch_assoc($result);
	//echo $res;
if($res)
	{
	?>	
	<section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="#" class="image-popup"><img src="../Personal-Admin/production/<?php echo $res['fileName'];?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $res['food_name'];?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4" style="color: #000;""font-style:time new roman">
								Protien : <?php echo $res['protien'];?>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">Fat : <?php echo $res['fat'];?> </a></p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">Sodium : <?php echo $res['sodium'];?></a></p>&nbsp &nbsp 
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">Potassium : <?php echo $res['potassium'];?></a></p>
						</div>
    				<p class="price"><span>Calories:<?php echo $res['fcalories'];?></span></p>
    				<p style="color: #000;" >Saturated Fat : <?php echo $res['saturatedfat'];?>&nbsp &nbsp Polyunsaturated Fat : <?php echo $res['polyfat'];?>&nbsp &nbsp
					Monounsaturated Fat : <?php echo $res['monofat'];?>&nbsp &nbsp Cholestero : <?php echo $res['cholesterol'];?>&nbsp &nbsp
					Carbohydrates : <?php echo $res['tcarbo'];?>&nbsp &nbsp Dietary fiber : <?php echo $res['dfiber'];?>&nbsp &nbsp
					Sugar : <?php echo $res['sugar'];?>&nbsp &nbsp &nbsp <br> pre : <?php echo $res['pre'];?>
						</p>
					
          	<p><a href="Viewfooditem.php" class="btn btn-black py-3 px-5">Back</a></p>
    			</div>
    		</div>
    	</div>
    </section>
	
	<?php
	}
	else
	{
		echo"Product Not Found";
	}
}
else
{
	echo"Something went wrong";
}


?>
<?php
	include("footer.php");
?>