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
                            <h3>Add Recipe</h3>
                        </div>
					<?php
							include("detialDB.inc.php");
							$item = $_GET['id'];
							$qu = "SELECT * FROM addrecipe where food_id = '$item'";
							$query= mysqli_query($mysqli_conn, $qu);
							$row = mysqli_fetch_array($query);
					?>



                        <!--<div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">             
                                
                                <div class="x_content">
                                    <form class="form-group" action="updaterecipe.php" method="POST" enctype ="multipart/form-data" >
                                        <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                        </p>-->
                                        <span class="section">Food-Recipe</span>
									
	<div class="row">
              <div class='col-sm-2 label-align'><label>Food-Id</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='food_id' value="<?php echo $row['food_id'];?>"class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Food-Name</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='food_name' value="<?php echo $row['food_name'];?>" class='form-control'></div>
			    <div class='col-sm-2 label-align'> <label>Preparation Time</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='Ptime' value="<?php echo $row['Ptime'];?>" class='form-control'></div>
	<br>
	</div>	
<br>	
		<div class="row">
                    
			<div class='col-sm-2 label-align'><label>Food-Title</label></div>
			  <div class='col-sm-2 label-align'> <textarea name='FTmessage' class='form-control'>
					<?php echo $row['FTmessage'];?>
			  </textarea></div>
				<div class='col-sm-2 label-align'><label>Cooking Time</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='cooktime'value="<?php echo $row['cooktime'];?>" class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Meal Type</label></div>
			   <div class='col-sm-2 label-align'><input type ='text' name='Mtype'value="<?php echo $row['Mtype'];?>" class='form-control'></div>

					
	</div><br>
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>Ingredints</label></div>
			  <div class='col-sm-2 label-align'><textarea rows="15" cols="15"  name='Imessage' class='form-control'>
				<?php echo $row['Imessage'];?>
			  </textarea></div>
				<div class='col-sm-2 label-align'><label>Directions</label></div>
			  <div class='col-sm-2 label-align'><textarea rows="15" cols="15"  name='Dmessage'class='form-control'>
					<?php echo $row['Dmessage'];?>
			</textarea></div>
			   <div class='col-sm-2 label-align'> <label>Nutrition Details</label></div>
			   <div class='col-sm-2 label-align'><textarea rows="15" cols="15"  name='Nmessage'class='form-control'>
					<?php echo $row['Nmessage'];?>
			   </textarea></div>
				
	</div><br>
                <div class="row">
                
				<div class='col-sm-2 label-align'><label>Amount Per Serving</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='serve' value="<?php echo $row['serve'];?>"class='form-control'></div>
			  <div class='col-sm-2 label-align'><label>Image</label></div>
			  <div class='col-sm-3 label-align'><input type = "file" name = "fileName" value="<?php echo $row['fileName'];?>"></div>
	
	</div><br> 
			
                                 
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
												 <a href="viewrecipelist.php" <button type="button" class="btn btn-success"> BACK </button></a>
                                                    <button type='submit' class="btn btn-primary" name="update" value="uploade">Update</button>
                                                             
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