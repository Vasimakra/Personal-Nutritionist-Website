<?php
	include("detialDB.inc.php");
	if(isset($_POST['update']))
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
		$query ="UPDATE added_item SET food_name='$b', fcalories='$r',protien='$c',fat='$d',saturatedfat='$e',polyfat='$f',monofat='$g',Tfat='$h',cholesterol='$i',fileName='$image',sodium='$j',potassium='$k',tcarbo='$l',dfiber='$m',sugar='$n',pre='$o' WHERE food_id='$a'";
		$query_run = mysqli_query($mysqli_conn,$query);
		if($query_run)
		{
			//move_uploaded_file($_FILES["fileName"]["tmp_name"],"uploade/".$_FILES["fileName"]["name"]);
			$_SESSION['success'] = 'update';
			header('Location:viewitemlist.php');
		}
		else
		{
			$_SESSION['status']="Record not updated";
			header('Location: viewitemlist.php');
		}
		
		
	}	
?>