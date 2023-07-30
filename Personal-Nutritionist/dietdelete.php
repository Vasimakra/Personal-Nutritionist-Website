<?php
	include("detialDB.inc.php");
	if(isset($_GET['del']))
	{
		$a= $_GET['del'];        
		
		$query="DELETE FROM dietplan WHERE id='".$a."'";
		 $delete = mysqli_query($mysqli_conn,$query);
		 if($delete)
		 {
			$_SESSION['success'] = 'deleted';
			header('Location:diet.php');
		 }
		 else
		{
			$_SESSION['status']="Record not delete";
			header('Location:diet.php');
		}
	}
?>