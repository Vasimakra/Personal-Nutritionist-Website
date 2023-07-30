<?php
	include("config.php");
	include("header.php");
	include("menu1.php");
	
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--<link rel = "stylesheet" href="assets/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="dist/bootstrap-clockpicker.css">
	</head>

 <section class="ftco-section">
    <div class="container">
		<div class="row">
			<div class="col-md-3 d-flex"></div>
				<div class="col-md-6">
					<form action="" method="post">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6"><label>Meal Name</label></div>
								<div class="col-sm-6">
								<?php
										$mealtype='';
										$query = "SELECT mealtype FROM dietplan GROUP BY mealtype ORDER BY mealtype ASC";
										$result = mysqli_query($mysqli_conn, $query);
										while($row = mysqli_fetch_array($result))
										{
											$mealtype.='<option value ="'.$row["mealtype"].'">'.$row["mealtype"].'</option>';
										}
										

								?>
									<select name="mealtype" id="mealtype" class="form-select form-control">
										<option value="">---Select Mealtype---</option>
										<?php echo $mealtype;?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<input class="form-control" id="single-input" value="" placeholder="Now">
						</div>
						<div class="form-group"style="width=fixed;">
							<input type="submit" value="Remind Me" class="btn btn-primary py-3 px-5">
						</div>
					</form>
				</div>
			<div class="col-md-3"></div>
		</div>
      </div>
  </section>
  
		<script type ="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type ="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type ="text/javascript" src="dist/bootstrap-clockpicker.js"></script>
		
		<script type="text/javascript">
var input = $('#single-input').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
});

/* Manually toggle to the minutes view
$('#check-minutes').click(function(e){
    // Have to stop propagation here
    e.stopPropagation();
    input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
});*/
</script>

<?php
include("footer.php");
?>