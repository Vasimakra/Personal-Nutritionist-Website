<?php
	include("header.php");
	include("menu.php");
?>
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
             

              <!--<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>-->
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>List of Food Recipe</small></h2>
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
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
					<?php
							error_reporting(0);
							include("detialDB.inc.php");
							$query = "SELECT * FROM addrecipe";
							$result = mysqli_query($mysqli_conn, $query);
							if(mysqli_num_rows($result) > 0)
							{
							
						
					?>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Food_ID</th>
                          <th>Food_Name</th>
                          <th>Preparation Time</th>
                          <th>Foot_Title</th>
                          <th>Cooking Time</th>
                          <th>Meal Type</th>
						   <th>Ingredints</th>
                          <th>Directions</th>
                          <th>Nutrition Details</th>
                          <th>Amount Per Serving</th>
                          <th>Image</th>
						  <th>Edit</th>
						  <th>View</th>
						  <th>Delete</th>
                        </tr>
						
                      </thead>
                     <tbody>
					 <?php
								while($rows=mysqli_fetch_assoc($result))
								{
						?>
										<tr>
											<td><?php echo $rows['food_id'];?></td>
											<td><?php echo $rows['food_name'];?></td>
											<td><?php echo $rows['Ptime'] ;?></td>
											<td><?php echo $rows['FTmessage'];?></td>
											<td><?php echo $rows['cooktime'];?></td>
											<td><?php echo $rows['Mtype'];?></td>
											<td><?php echo $rows['Imessage'];?></td>
											<td><?php echo $rows['Dmessage'];?></td>
											<td><?php echo $rows['Nmessage'];?></td>
											<td><?php echo $rows['serve'];?></td>
											<td><img src="<?php echo $rows['fileName'];?>" alt="Image" width="50px" height="50px"></td>
											<td><a href = "viewrecipe.php?id=<?php echo $rows['food_id'];?>"<button type="button" class="btn btn-info">VIEW</button></a></td>
											<td><a href = "recipeedit.php?id=<?php echo $rows['food_id'];?>"<button type="button" class="btn btn-warning">EDIT</button></a></td>
											<td><a href = "recipedelete.php?del=<?php echo $rows['food_id'];?>"<button type="button" class="btn btn-danger">DELETE</button></a></td>
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
   <?php
	include("footer.php");
?>