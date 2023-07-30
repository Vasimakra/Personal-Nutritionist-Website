<?php
	include("header.php");
	include("menu.php");
?>
	
		

  <div class="container body">
      <div class="main_container">
			<div class="right_col" role="main">
                <div class="">
                    <div class="page-title">`
                        <div class="title_left">
                            <h3>DETIALS</h3>
                        </div> 
						<?php
							include("detialDB.inc.php");
							$item = $_GET['id'];
							$qu = "SELECT * FROM customerdata where id = '$item'";
							$query= mysqli_query($mysqli_conn, $qu);
							$row = mysqli_fetch_array($query);
					?>
						 <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                
                                <div class="x_content">
                                    <form class="form-group" action="" method="POST" enctype ="multipart/form-data" novalidate>
                                        <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                        </p>-->
                                        <span class="section">Single User Detials</span>
									
	<div class="row">
              <div class='col-sm-2 label-align'><label>Id</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='id' disabled value="<?php echo $row['id'];?>"class='form-control'></div>
				<div class='col-sm-2 label-align'><label>User-Name</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='username' disabled value="<?php echo $row['username'];?>" class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>User-Gender</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='gender' disabled value="<?php echo $row['gender'];?>" class='form-control'></div>
	<br>
	</div>	
<br>	
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>User-Age</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='age' disabled value="<?php echo $row['age'];?>" class='form-control'></div>
				<div class='col-sm-2 label-align'><label>User-Height</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='height' disabled value="<?php echo $row['height'];?>" class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>User-Weight</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='weight' disabled value="<?php echo $row['weight'];?>" class='form-control'></div>
	</div><br>
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>User-BMI</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='bmi' disabled value="<?php echo $row['bmi'];?>" class='form-control'></div>
				<div class='col-sm-2 label-align'><label>User-Email</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='email' disabled value="<?php echo $row['email'];?>" class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Date</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='date' disabled value="<?php echo $row['date'];?>" class='form-control'></div>
	
	</div><br>
                <div class="row">
                
				<div class='col-sm-2 label-align'><label>User-Calories</label></div>
			  <div class='col-sm-3 label-align'><input type ='text' name='calories' disabled value="<?php echo $row['calories'];?>" class='form-control'></div>
			 
	
	</div><br> 
	
			
                                 
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <a href="Userdetials.php" <button type="button" class="btn btn-success"> BACK </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
<?php
	include("footer.php");
?>