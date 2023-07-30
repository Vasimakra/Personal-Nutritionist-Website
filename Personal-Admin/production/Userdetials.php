<?php
	include("header.php");
	include("menu.php");
?>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
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
				 <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
							<?php
							error_reporting(0);
							include("detialDB.inc.php");
							$query = "SELECT * FROM customerdata";
							$result = mysqli_query($mysqli_conn, $query);
							if(mysqli_num_rows($result) > 0)
							{
							
						
					?>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>User Name</th>
						   <th>User Gender</th>
                          <th>Age</th>
                          <th>Height</th>
                          <th>Weight</th>
							<th>BMI</th>
                          <th>Email</th>
                          <th>Date</th>
                          <th>Calories</th>
                          <th>View</th>
						  <th>Delete</th>
	                   </tr>
                      </thead>
                     <tbody>
							<?php
								while($row=mysqli_fetch_assoc($result))
								{
						?>
							<tr>
								<td><?php echo $row['id'];?></td>
								<td><?php echo $row['username'];?></td>
								<td><?php echo $row['gender'];?></td>
								<td><?php echo $row['age'];?></td>
								<td><?php echo $row['height'];?></td>
								<td><?php echo $row['weight'];?></td>
								<td><?php echo $row['bmi'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['date'];?></td>
								<td><?php echo $row['calories'];?></td>
								<td><a href = "viewuser.php?id=<?php echo $row['id'];?>"<button type="button" class="btn btn-info">VIEW</button></a></td>
								<td><a href = "deleteuser.php?del=<?php echo $row['id'];?>"<button type="button" class="btn btn-danger">DELETE</button></a></td>
								
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
          
        </footer>
        <!-- /footer content -->
      </div>
    </div >
	</div>



<?php
include("footer.php");
?>