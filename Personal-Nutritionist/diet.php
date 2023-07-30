<?php
	include("config.php");
	include("header.php");
	include("menu1.php");
	
?> 
<?php
				//include("config.php");
				if(isset($_POST['diet']))
				{
					$mealtype=$_POST['mealtype'];
					$meal=$_POST['meal'];
					$cal=$_POST['cal'];
					$fat=$_POST['fat'];
					$pro=$_POST['pro'];
					$insert= mysqli_query($mysqli_conn,"insert into dietplan(mealtype,meal,cal,fat,pro) values ('$mealtype','$meal','$cal','$fat','$pro')");
				}
				
			?>
  
    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          
          <div class="col-md-6 d-flex">
		  <div class="container">
            <form action="" method="post">
				<div class="form-group">
					<input type="text" class="form-control" name="mealtype" id="mealtype" placeholder="Enter Meal Type">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="meal" placeholder="Enter Meal">
				</div>
				<div class="form-group">
					 <div class="row">
                  <div class="col-sm-8"><input type="text" name="search" class="form-control" placeholder="Search data"></div>
                  <div class="col-sm-4"> <button class="btn btn-dark form-control" name="search_item">Search</button></div>
                </div><br>
				</div>
				<?php
          
          if(isset($_POST['search_item']))
        {
          $search = $_POST['search'];
          $sql = "select * from added_item where food_id='$search'or food_name='$search'";
          $result = mysqli_query($mysqli_conn,$sql);
          if($result)
          {
            if($num = mysqli_num_rows($result)>0)
            {
              $rows = mysqli_fetch_assoc($result);
              echo"<div class='form-group'>
              <div class='row'>
            <div class='col-sm-3'><input type='text' name='cal'class='form-control' value=".$rows['fcalories']." placeholder='Cal'></div>
            <div class='col-sm-3'><input type='text' name='fat' class='form-control' value=".$rows['fat']." placeholder='Fat'></div>
            <div class='col-sm-3'><input type='text' name='pro' class='form-control' value=".$rows['protien']." placeholder='Protien'></div>
        </div>
        </div>";
            }
            else
            {
                echo"<h2 class=text-danger> Data not found</h2>";
            }
           
          }
        }
    ?>
			<div class="form-group">
                <input type="submit" name="diet" value="conform-diet" class="btn btn-primary py-3 px-5">
              </div>
			</form>
          </div>
          </div>
          <div class="col-md-6 d-flex">
			<?php
							error_reporting(0);
							include("detialDB.inc.php");
							$query = "SELECT * FROM dietplan";
							$result = mysqli_query($mysqli_conn, $query);
							if(mysqli_num_rows($result) > 0)
							{
								
								?>
											<table  class="table-bordered" style="width:100%;" "border: 1px solid black;" "border-collapse: collapse;""table-layout : fixed;">
						  <thead>
							<tr>
							  <th>Meal Type</th>
							  <th>Meal name</th>
							  <th>Calories</th>
							  <th>Fat</th>
							  <th>Protien</th>
							  <th>Delete</th>
							  
							 </tr>
						</thead>
						
								<?php
								
								while($row=mysqli_fetch_assoc($result))
								{	
									$a = $row['mealtype'];
									$b =  $row['meal'];
									$c=$row['cal'];
									$d=$row['fat'];
									$e=$row['pro'];

									?>
						
                     <tbody>
					 <tr>
							<td><?php echo $a;?></td>
							<td><?php echo $b;?></td>
							<td><?php echo $c;?></td>
							<td><?php echo $d;?></td>
							<td><?php echo $e;?></td>
							<td><a href = "dietdelete.php?del=<?php echo $row['id'];?>"<button type="button" class="btn btn-danger">DELETE</button></a></td>
					</tr>
				</tbody>
                    </table>
									<?php
								}
							}
							
					?>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
          
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>

<?php
include("footer.php");
?>
