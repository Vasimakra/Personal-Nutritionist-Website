<?php
	include("header.php");
	include("menu.php");
?>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><small>List of Food Items</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <!--<div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>-->
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
					<?php
							error_reporting(0);
							include("detialDB.inc.php");
							$query = "SELECT * FROM additem";
							$result = mysqli_query($mysqli_conn, $query);
							if(mysqli_num_rows($result) > 0)
							{
							
						
					?>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Food_ID</th>
                          <th>Food_Name</th>
                          <th>Food_Calories</th>
                          <th>Proteins</th>
                          <th>Fat</th>
						<th>Saturated Fat</th>
                          <th>Polyunsaturated Fat</th>
                          <th>Monounsaturated Fat</th>
                          <th>Trans Fat</th>
                          <th>Cholesterol</th>
                          <th>Sodium</th>
						   <th>Potassium</th>
                          <th>Carbohydrates</th>
                          <th>Dietary fiber</th>
                          <th>Sugar</th>
                          <th>Per</th>
                          <th>Image</th>
						  <th>View</th>
						  <th>Edit</th>
						  <th>Delete</th>
                        </tr>
                      </thead>
                     <tbody>
							<?php
								while($row=mysqli_fetch_assoc($result))
								{
						?>
							<tr>
								<td><?php echo $row['food_id'];?></td>
								<td><?php echo $row['food_name'];?></td>
								<td><?php echo $row['fcalories'];?></td>
								<td><?php echo $row['protien'];?></td>
								<td><?php echo $row['fat'];?></td>
								<td><?php echo $row['saturatedfat'];?></td>
								<td><?php echo $row['polyfat'];?></td>
								<td><?php echo $row['monofat'];?></td>
								<td><?php echo $row['Tfat'];?></td>
								<td><?php echo $row['cholesterol'];?></td>
								<td><?php echo $row['sodium'];?></td>
								<td><?php echo $row['potassium'];?></td>
								<td><?php echo $row['tcarbo'];?></td>
								<td><?php echo $row['dfiber'];?></td>
								<td><?php echo $row['sugar'];?></td>
								<td><?php echo $row['pre'];?></td>
								<td><img src="<?php echo $row['fileName'];?>" alt="Image" width="50px" height="50px"></td>
								<td><a href = "viewitem.php?id=<?php echo $row['food_id'];?>"<button type="button" class="btn btn-info">VIEW</button></a></td>
								<td><a href = "Fruitedit.php?id=<?php echo $row['food_id'];?>"<button type="button" class="btn btn-warning">EDIT</button></a></td>
								<td><a href = "Fruitdelete.php?del=<?php echo $row['food_id'];?>"<button type="button" class="btn btn-danger">DELETE</button></a></td>
							</tr>
								<?php
									}
								 
								?>
					</tbody>
                    </table>
					<?php
						}
							else
							{
								echo "No Record Found";
							}
					?>
                  </div>
                  </div>
              </div>
            </div>
                </div>
				
              </div>
   <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div >
	</div>
   <?php
	include("footer.php");
?>