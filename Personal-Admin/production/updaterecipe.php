<?php
	include("detialDB.inc.php");
	if(isset($_POST['update']))
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
		$query = "update addrecipe set food_name='$b',Ptime='$r',FTmessage='$c',cooktime='$d',Mtype='$e',Imessage='$f',Dmessage='$g',Nmessage='$h',serve='$i',fileName='$image' where food_id='$a'";
		$query_run = mysqli_query($mysqli_conn,$query);
		if($query_run)
		{
			//move_uploaded_file($_FILES["fileName"]["tmp_name"],"uploade/".$_FILES["fileName"]["name"]);
			$_SESSION['success'] = 'update';
			header('Location:viewrecipelist.php');
		}
		else
		{
			$_SESSION['status']="Record not updated";
			header('Location: viewrecipelist.php');
		}
	}
?>