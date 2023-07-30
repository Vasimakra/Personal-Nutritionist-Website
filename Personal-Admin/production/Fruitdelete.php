<?php
	include("detialDB.inc.php");
	if(isset($_GET['del']))
	{
		$a= $_GET['del'];        
		
		$query="DELETE FROM additem WHERE food_id='".$a."'";
		 $delete = mysqli_query($mysqli_conn,$query);
		 if($delete)
		 {
			$_SESSION['success'] = 'deleted';
			header('Location:fruitslist.php');
		 }
		 else
		{
			$_SESSION['status']="Record not delete";
			header('Location:fruitslist.php');
		}
	}
?>