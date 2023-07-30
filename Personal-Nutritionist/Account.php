<?php
require_once("config.php");
	include("header.php");
	include("menu1.php");
	
?>
<?php 
//error_reporting(0);

if(!isset($_SESSION["login_sess"])) 
{
    header("location:login.php"); 
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($mysqli_conn, "SELECT * FROM customerdata WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
$username = $res['username']; 
$gender = $res['gender'];   
$age = $res['age'];  
$height = $res['height'];  
$weight= $res['weight'];
$bmi= $res['bmi'];
$email= $res['email'];
$calories= $res['calories'];
}
 ?>
 <style>
 </style>
<body>
<section class="ftco-section">
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            
        </div>
        <div class="col-sm-6">
  <div class="login_form">
      
          <div class="row">
            <div class="col"></div>
           <div class="col-6"> 
             <?php if(isset($_GET['profile_updated'])) 
      { ?>
    <div class="successmsg">Profile saved ..</div>
      <?php } ?>
        <?php if(isset($_GET['password_updated'])) 
      { ?>
    <div class="successmsg">Password has been changed...</div>
      <?php } ?>
            <center>
            <?php ?> 

  <p> Welcome! <span style="color:#33CC00"></span> </p>
  </center>
           </div>
            <div class="col"><p><a href="logout.php"><span style="color:red;">Logout</span> </a></p>
         </div>
          </div>
			<div class="row">
              <div class='col-sm-4 label-align'><label>User Name</label></div>
			  <div class='col-sm-8 label-align'><input type ='text' name='username' disabled class='form-control' value="<?php echo $username;?>"></div>
			</div><br>
			<div class="row">
              <div class='col-sm-4 label-align'><label>Gender</label></div>
			  <div class='col-sm-8 label-align'><input type ='text' name='gender' disabled class='form-control' value="<?php echo $gender;?>"></div>
			</div><br>
			<div class="row">
              <div class='col-sm-4 label-align'><label>Age</label></div>
			  <div class='col-sm-8 label-align'><input type ='text' name='age' disabled class='form-control' value="<?php echo $age;?>"></div>
			</div><br>
			<div class="row">
              <div class='col-sm-2 label-align'><label>Height</label></div>
			  <div class='col-sm-4 label-align'><input type ='text' name='height' disabled class='form-control' value="<?php echo $height;?>"></div>
			   <div class='col-sm-2 label-align'><label>Weight</label></div>
			  <div class='col-sm-4 label-align'><input type ='text' name='weight' disabled class='form-control' value="<?php echo $weight;?>"></div>
			</div><br>
		
			<div class="row">
              <div class='col-sm-2 label-align'><label>Bmi</label></div>
			  <div class='col-sm-4 label-align'><input type ='text' name='bmi' disabled class='form-control' value="<?php echo $bmi;?>"></div>
			   <div class='col-sm-2 label-align'><label>Calories</label></div>
			  <div class='col-sm-4 label-align'><input type ='text' name='calories' disabled class='form-control' value="<?php echo $calories;?>"></div>
			</div><br>
			<div class="row">
              <div class='col-sm-4 label-align'><label>E-mail</label></div>
			  <div class='col-sm-8 label-align'><input type ='text' name='email' disabled class='form-control'value="<?php echo $email;?>"></div>
			</div><br>
           <div class="row">
            <div class="col-sm-2">
                <a href="edit-profile.php?id=<?php echo $username;?>"><button type="button" class="btn btn-primary">Edit Profile</button></a>
            </div>
            <div class="col-sm-6">
         <a href="change-password.php"><button type="button" class="btn btn-warning">Change Password</button></a>
            </div>
           </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div> 
</section>
</body>


<?php
include("footer.php");
?>