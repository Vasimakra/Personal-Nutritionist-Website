<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Calorie Calculator</title>

    <style>
	body{
	margin:0%;
	padding:0%;
	color:black;
	font-family:Arial,Helvetica,sans-serif;
	background-color:skyblue;
}
.container{
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
select{
	outline: none;
	border : none;
	padding:5px;
}
      #loading, #results {
        display: none;
      }
      #loading {
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
	  <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <div class="card card-body text-center mt-5">
            <h1 class="heading display-5 pb-3">Calorie Calculator</h1>
            <form id="calorie-form">

              <div class="form-group row">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="age" placeholder="Ages 15-80">
                </div>
              </div><br>

              <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                  <div class="col-sm-10" id="form-radio">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="male" name="customRadioInline1" class="custom-control-input" checked="checked">
                      <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="female" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="female">Female</label>
                    </div>  
                  </div>
                </div> 
              </fieldset> <br>

              <div class="form-group row">
                <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="weight" placeholder="In kilograms">
                </div>
              </div><br>

              <div class="form-group row">
                <label for="height" class="col-sm-2 col-form-label">Height</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="height" placeholder="In centimeters">
                </div>
              </div><br>
              
              <div class="form-group row">
                <legend class="col-form-label col-sm-2 pt-0">Activity</legend>
                <select class="custom-select col-sm-10 form-control" id="list">
                  <option selected value="1">Sedentary (little or no exercise)</option>
                  <option value="2">Lightly active (light exercise/sports 1-3 days/week)</option>
                  <option value="3">Moderately active (moderate exercise/sports 3-5 days/week)</option>
                  <option value="4">Very active (hard exercise/sports 6-7 days a week)</option>
                  <option value="5">Extra active (very hard exercise/sports & physical job or 2x training)</option>
                </select>
              </div><br>

              <div class="form-group">
                <input type="submit" value="Calculate" class="btn btn-dark btn-block">
              </div>
			<p>Back to Signup? <a href="signup.php">Back</a></p>
            </form>

            <div id="loading">
              <img src="./img/Loading.gif" alt="">
            </div>

            <div id="results" class="pt-4">
              <h5>Total Calories</h5>
              <div class="form-group">
                <div class="input-group">
                  <input type="number" class="form-control" id="total-calories" disabled>
                </div>
              </div>                       
            </div>
          </div>
        </div>
		<div class="col-sm-3"></div>
      </div>	
	  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>