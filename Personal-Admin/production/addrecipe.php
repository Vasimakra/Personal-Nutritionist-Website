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
	 //error_reporting(0);
//set cookie lifetime for 100 days (60sec * 60mins * 24hours * 100days)
//ini_set('session.cookie_lifetime', 60 * 60 * 24 * 100);
//ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 100);
//then start the session
//ob_start();
//session_start(); 	
	include("detialDB.inc.php");
	if(isset($_POST ['submit']))
	{                                                                                                                                                                                                                                                                                                                                                                                                                        

		 $a=$_POST['food_id'];
		 $b=$_POST['food_name'];
		 $r=$_POST['Ptime'];
		 $c=$_POST['FTmessage'];
		 $d=$_POST['cooktime'];
		 $e=$_POST['Mtype'];
		 $f=$_POST['Imessage'];
		 $g=$_POST['Dmessage'];
		 $h=$_POST['Nmessage'];
		 $i=$_POST['serve'];
		$name = $_FILES['fileName']['name'];
		$temp = $_FILES['fileName']['tmp_name'];
		   $location="./uploade/";
        $image=$location.$name;
        $target_dir="./uploade/";
        $finalImage=$target_dir.$name;
        move_uploaded_file($temp,$finalImage);
		$insert= mysqli_query($mysqli_conn,"insert into addrecipe(food_id,food_name,Ptime,FTmessage,cooktime,Mtype,Imessage,Dmessage,Nmessage,serve,fileName) values('$a','$b','$r','$c','$d','$e','$f','$g','$h','$i','$image')");
		
	}		
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
                                    <form class="form-group" action="addrecipe.php" method="POST" enctype ="multipart/form-data" novalidate>
                                        <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                        </p>-->
                                        <span class="section">Food-Recipe</span>
									
	<div class="row">
              <div class='col-sm-2 label-align'><label>Food-Id</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='food_id' class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Food-Name</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='food_name' class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Preparation Time</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='Ptime' class='form-control'></div>
	<br>
	</div>	
<br>	
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>Food-Title</label></div>
			  <div class='col-sm-2 label-align'> <textarea  name='FTmessage'class='form-control'></textarea></div>
				<div class='col-sm-2 label-align'><label>Cooking Time</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='cooktime' class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Meal Type</label></div>
			   <div class='col-sm-2 label-align'><input type ='text' name='Mtype' class='form-control'></div>

					
	</div><br>
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>Ingredints</label></div>
			  <div class='col-sm-2 label-align'><textarea rows="15" cols="15" required="required" name='Imessage'class='form-control'></textarea></div>
				<div class='col-sm-2 label-align'><label>Directions</label></div>
			  <div class='col-sm-2 label-align'><textarea rows="15" cols="15" required="required" name='Dmessage'class='form-control'></textarea></div>
			   <div class='col-sm-2 label-align'> <label>Nutrition Details</label></div>
			   <div class='col-sm-2 label-align'><textarea rows="15" cols="15" required="required" name='Nmessage'class='form-control'></textarea></div>
				
	</div><br>
                <div class="row">
                
				<div class='col-sm-2 label-align'><label>Amount Per Serving</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='serve' class='form-control'></div>
			  <div class='col-sm-2 label-align'><label>Image</label></div>
			  <div class='col-sm-3 label-align'><input type = "file" name = "fileName"></div>
	
	</div><br> 
			
                                 
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary" name="submit" value="uploade">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
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