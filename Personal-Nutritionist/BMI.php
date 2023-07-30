<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src ="Script.js" defer></script>
	<!--<script>
		let button = document.getElementById('btn');
		
		button.addEventListener('click',()=>{
			const height = parseInt(document.getElementById('height').value);
			const weight = parseInt(document.getElementById('weight').value);
			const result = document.getElementById('output');
			let height_status = false, weight_status=false;
			
			if(height =='' || isNaN(height) ||(height <= 0))
			{
				document.getElementById('height_error').innerHTML = 'Please provide a valid height';
			}
			else
			{
				document.getElementById('height_error').innerHTML = '';
				height_status=true;	
			}
			if(weight == '' || isNaN(weight) ||(weight <= 0))
			{
				document.getElementById('weight_error').innerHTML = 'Please provide a valid weight';
			}
			else
			{
				document.getElementById('weight_error').innerHTML = '';
				weight_status = true;
			}
			if(height_status && weight_status)
			{
					const bmi = (weight/((height*height)/10000)).toFixed(2);
					if(bmi < 18.6)
					{
							result.innerHTML = 'Under Weight :' +bmi;
					}
					else if(bmi >= 18.6 && bmi < 24.9)
					{
							result.innerHTML = 'Normal : ' +bmi;
					}
					else
					{
						result.innerHTML = 'Over Weight :' +bmi;
					}
			}
			else
			{
				alert('The form has errors');
				result.innerHTML = '';
			}
		});
  </script>-->
  <style>
body{
	margin:0%;
	padding:0%;
	color:black;
	font-family:Arial,Helvetica,sans-serif;
	background-color:skyblue;
}
span{
	color:red;
}
.wrapper{
	position:absolute;
	top:45%;
	left:50%;
	transform:translate(-50%,-50%);
	padding:15px;
	
	border-radius:5px;
	box-shadow:rgb(38,57,77) 0px 20px 30px -10px;
}
input{
	outline: none;
	border : none;
	padding:5px;
}
button{
	color: white;
	padding: 10px;
	border: 2px solid white;
	background: black;
	margin-top:10%;
	cursor:pointer;
}

</style>
  
</head>

<body>
	<div class="wrapper">
		<p style="text-align:center;">Calculate BMI</p>
		<p>Height in CM:
			<input type="text" id="height"><br><span id="height_error"></span>
		</p>
		<p>Weight in KG:
			<input type="text" id="weight"><br><span id="weight_error"></span>
		</p>
		
		<button id ="btn" >Calculate</button>   
		<p id="output"></p>
		<p>Back to Signup? <a href="signup.php">Back</a></p>
	
	</div>
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                               