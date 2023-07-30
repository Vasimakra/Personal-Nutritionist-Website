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
							$qu = "SELECT * FROM added_item where food_id = '$item'";
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
                                        <span class="section">Food-Recipe</span>
									
	<div class="row">
              <div class='col-sm-2 label-align'><label>Food-Id</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='food_id' disabled value="<?php echo $row['food_id'];?>"class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Food-Name</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='food_name' disabled value="<?php echo $row['food_name'];?>" class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Food-Calories</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='fcalories' disabled value="<?php echo $row['fcalories'];?>" class='form-control'></div>
	<br>
	</div>	
<br>	
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>Protiens</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='protien' disabled value="<?php echo $row['protien'];?>" class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Fat</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='fat' disabled value="<?php echo $row['fat'];?>" class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Saturated Fat</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='saturatedfat' disabled value="<?php echo $row['saturatedfat'];?>" class='form-control'></div>
	</div><br>
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>Polyunsaturated</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='polyfat' disabled value="<?php echo $row['polyfat'];?>" class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Monounsaturated Fat</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='monofat' disabled value="<?php echo $row['monofat'];?>" class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Trans Fat</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='Tfat' disabled value="<?php echo $row['Tfat'];?>" class='form-control'></div>
	
	</div><br>
                <div class="row">
                
				<div class='col-sm-2 label-align'><label>Cholesterol</label></div>
			  <div class='col-sm-3 label-align'><input type ='text' name='cholesterol' disabled value="<?php echo $row['cholesterol'];?>" class='form-control'></div>
			  <div class='col-sm-2 label-align'><label>Image</label></div>
			  <div class='col-sm-3 label-align'><img src="<?php echo $row['fileName'];?>" alt="Image" width="100px" height="100px"></div>
	
	
	</div><br> 
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>Sodium</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='sodium' disabled value="<?php echo $row['sodium'];?>" class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Potassium</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='potassium' disabled value="<?php echo $row['potassium'];?>" class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Total Carbohydrate</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='tcarbo' disabled value="<?php echo $row['tcarbo'];?>" class='form-control'></div>
	
	</div><br>
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>Dietary Fiber</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='dfiber' disabled value="<?php echo $row['dfiber'];?>" class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Sugar</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='sugar' disabled value="<?php echo $row['sugar'];?>" class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Per</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='pre' disabled value="<?php echo $row['pre'];?>" class='form-control'></div>
	
	</div><br>
			
                                 
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <a href="Vegetableslist.php" <button type="button" class="btn btn-success"> BACK </button></a>
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