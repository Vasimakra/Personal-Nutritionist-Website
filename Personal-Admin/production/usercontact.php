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
							$qu = "SELECT * FROM contact where id = '$item'";
							$query= mysqli_query($mysqli_conn, $qu);
							$row = mysqli_fetch_array($query);
					?>

                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">             
                                
                                <div class="x_content">
                                    <form class="form-group" action="recipeedit.php" method="POST" enctype ="multipart/form-data" novalidate>
                                        <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                        </p>-->
                                        <span class="section">Food-Recipe</span>
									
	<div class="row">
              <div class='col-sm-2 label-align'><label>Id</label></div>
			  <div class='col-sm-4 label-align'><input type ='text' name='food_id' disabled value="<?php echo $row['id'];?>"class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Name</label></div>
			  <div class='col-sm-4 label-align'><input type ='text' name='food_name' disabled value="<?php echo $row['name'];?>" class='form-control'></div>
	</div>	<br>
<br>	
<div class="row">
              <div class='col-sm-2 label-align'><label>E-Mail</label></div>
			  <div class='col-sm-4 label-align'><input type ='text' name='food_id' disabled value="<?php echo $row['email'];?>"class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Subject</label></div>
			  <div class='col-sm-4 label-align'><input type ='text' name='food_name' disabled value="<?php echo $row['subject'];?>" class='form-control'></div>
	</div>	<br>
<br>	
		<div class="row">
                 <div class='col-sm-2 label-align'><label>Food-Title</label></div>   
			  <div class='col-sm-4 label-align'> <textarea  name='FTmessage' disabled class='form-control'>
					<?php echo $row['message'];?>
			  </textarea></div>
				

	</div>
			
                                 
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                   
                                                   <a href="viewcontact.php" <button type="button" class="btn btn-success"> BACK </button></a>
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