<?php
	include("header.php");
	include("menu1.php");
?>
<?php
include("detialDB.inc.php");
if(isset($_GET['item']))
{
	$item = $_GET['item'];
	$query = "SELECT * FROM addrecipe where food_id=$item";
	$result = mysqli_query($mysqli_conn, $query);
	$res= mysqli_fetch_assoc($result);
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
							
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">Preparation Time : <?php echo $res['Ptime'];?></a></p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">Cooking Time : <?php echo $res['cooktime'];?></a></p><br>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">Meal Type : <?php echo $res['Mtype'];?></a></p>&nbsp
							<p class="text-left mr-4"><a href="#" class="mr-2" style="color: #000;"></a></p>
								</div>
    				<p class="price"><span>Food Title : <?php echo $res['FTmessage'];?></span></p>
						<table  class="table-bordered" style="width:100%;" "border: 1px solid black;" "border-collapse: collapse;""table-layout : fixed;">
						  <thead>
							<tr>
							  <th>Ingredints</th>
							  <th>Directions</th>
							  <th>Nutrition Detials</th>
							 </tr>
						</thead>
						
                     <tbody>
					 <tr>
							<td><?php echo $res['Imessage'];?></td>
							<td><?php echo $res['Dmessage'];?></td>
							<td><?php echo $res['Nmessage'];?></td>
					</tr>
				</tbody>
                    </table>

						<div class="row mt-4">
							
							<div class="w-100"></div>
					
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;">Amount per Serving : <?php echo $res['serve'];?></p>
	          	</div>
          	</div>
          	<p><a href="Viewfoodrecipe.php" class="btn btn-black py-3 px-5">Back</a></p>
    			</div>
    		</div>
    	</div>
    </section>

<?php
	}
	else
	{
		echo "Product Not found";
	}
}
else
{
	echo "Something went wrong";
}

?>
<?php
	include("footer.php");
?>