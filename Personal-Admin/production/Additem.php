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
                            <h3>Add Food</h3>
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
		 $r=$_POST['fcalories'];
		 $c=$_POST['protien'];
		 $d=$_POST['fat'];
		 $e=$_POST['saturatedfat'];
		 $f=$_POST['polyfat'];
		 $g=$_POST['monofat'];
		 $h=$_POST['Tfat'];
		 $i=$_POST['cholesterol'];
		 
		 $name = $_FILES['fileName']['name'];
		$temp = $_FILES['fileName']['tmp_name'];
		   $location="./uploads/";
        $image=$location.$name;

        $target_dir="./uploads/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);
		
		$j = $_POST['sodium'];
		$k = $_POST['potassium'];
		$l = $_POST['tcarbo'];
		$m = $_POST['dfiber'];
		$n = $_POST['sugar'];
		$o = $_POST['pre'];
		
		 $insert= mysqli_query($mysqli_conn,"insert into added_item(food_id,food_name,fcalories,protien,fat,saturatedfat,polyfat,monofat,Tfat,cholesterol,fileName,sodium,potassium,tcarbo,dfiber,sugar,pre) values('$a','$b','$r','$c','$d','$e','$f','$g','$h','$i','$image','$j','$k','$l','$m','$n','$o')");
	
	}
					
?>	



                       <!-- <div class="title_right">
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
                                    <form class="form-group" action="" method="POST" enctype ="multipart/form-data" novalidate>
                                        <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                        </p>-->
                                        <span class="section">Food-Item</span>
									
	<div class="row">
              <div class='col-sm-2 label-align'><label>Food-Id</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='food_id' class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Food-Name</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='food_name' class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Food-Calories</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='fcalories' class='form-control'></div>
	<br>
	</div>	
<br>	
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>Protiens</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='protien' class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Fat</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='fat' class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Saturated Fat</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='saturatedfat' class='form-control'></div>
	</div><br>
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>Polyunsaturated</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='polyfat' class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Monounsaturated Fat</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='monofat' class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Trans Fat</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='Tfat' class='form-control'></div>
	
	</div><br>
                <div class="row">
                
				<div class='col-sm-2 label-align'><label>Cholesterol</label></div>
			  <div class='col-sm-3 label-align'><input type ='text' name='cholesterol' class='form-control'></div>
			  <div class='col-sm-2 label-align'><label>Image</label></div>
			  <div class='col-sm-3 label-align'><input type = "file" name = "fileName"></div>
	
	</div><br> 
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>Sodium</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='sodium' class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Potassium</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='potassium' class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Total Carbohydrate</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='tcarbo' class='form-control'></div>
	
	</div><br>
	<div class="row">
                    
			<div class='col-sm-2 label-align'><label>Dietary Fiber</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='dfiber' class='form-control'></div>
				<div class='col-sm-2 label-align'><label>Sugar</label></div>
			  <div class='col-sm-2 label-align'><input type ='text' name='sugar' class='form-control'></div>
			   <div class='col-sm-2 label-align'> <label>Per</label></div>
			   <div class='col-sm-2 label-align'> <input type ='text' name='pre' class='form-control'></div>
	
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