<?php
	include('config.php');
	if(isset($_POST['subforgot']))
	{
		$login = $_REQUEST['login_var'];
		$query = "select * from customerdata where (username ='$login' OR email ='$login')";
		$res = mysqli_query($mysqli_conn,$query);
		$result = mysqli_fetch_array($res);
		if($result)
		{
			$findresult = mysqli_query($mysqli_conn, "SELECT * FROM customerdata WHERE(username ='$login' OR email = '$login')");
			if($res = mysqli_fetch_array($findresult))
			{
				$oldftemail = $res['email'];
			}
			$token = bin2hex(random_bytes(50));
			$inresult = mysqli_query($mysqli_conn,"insert into pass_reset values('','$oldftemail','$token')");
			if($inresult)
			{
				$FromName = "Techno Smarter";
				$FromEmail="no_reply@technosmarter.com";
				$ReplyTo = "technosmarterinfo@gmail.com";
				$credits = "All rights are reserved | Techno Smarter ";
				$headers = "MIME-Version: 1.0\n";
					$headers .= "Content-type:text/html; charset=iso-8859-1\n";
					$headers .= "From: ".$FromName."<".$FromEmail.">\n";
					$headers .= "Replay-To: ".$ReplyTo."\n";
					$headers .= "X-sender:<".$FromEmail.">\n";
					$headers .= "X-Mailer: PHP\n";
					$headers .= "X-Priority: 1\n";
					$headers .= "Return-Path:<".$FromEmail.">\n";
					$subject = "You have recevide password reset email";
					$msg ="Your password reset link <br> http://localhost:8081/php/form/password-reset.php?>token=".$token."<br>Reset your password with this link.
					Click or open in new tab<br><br><br><br><center>".$credits."</center>";
					if(@mail($oldftemail,$subject,$msg,$headers,'-f' .$FromEmail))
					{
						$hide = '1';
					}
					else
					{
						header("location:forgot-password.php?servererr=1");
					}
				}
				else
				{
					header("location:forgot-password.php?something_wrong=1");
				}
		}	
else
{
	header("location:forgot-password.php?err=".$login);
}
	}
?>