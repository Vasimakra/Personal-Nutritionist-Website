<?php
	include("header.php");
	include("menu1.php");
	
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>



<section class="ftco-section contact-section bg-light">
<div class="container">
	<div class="row d-flex mb-5 contact-info">
<div class="w-100"></div>
<div class="col-md-2 d-flex">
	
</div>
<div class="col-md-8 d-flex">
		<div class="container">
<button type="button" class="btnbtn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Enter a Meal</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form action="diet.php" method="post" enctype ="multipart/form-data" novalidate>
<?php
    include("detialDB.inc.php");
    if(isset($_POST ['submit']))
    {                                                                                                                                                                                                                                                                                                                                                                                                                        

       //$a=$_POST['id'];
       $b=$_POST['meal'];
       $insert= mysqli_query($mysqli_conn,"insert into mealtype(id,meal) values ('','$b')");
    }

?>
<div class="mb-3">
<!--<label for="recipient-name" class="col-form-label">Recipient:</label>-->
<input type="text" class="form-control"name="meal" id="recipient-name" placeholder="Meal Type">
</div>

</div>
<div class="modal-footer">
<button type="button" class="btnbtn-secondary" data-bs-dismiss="modal">Cancel</button>
<button type="button"name="submit" class="btnbtn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
<!-- <form action="#" class="bg-white p-5 contact-form">
<div class="form-group">
<a href=""><input type="submit" value="Diet Plan" class="btnbtn-primary py-3 px-5 ">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Email">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Subject">
</div>
<div class="form-group">
<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Send Message" class="btnbtn-primary py-3 px-5">
</div>
</form>-->
</div>
</div>
<div class="col-md-2 d-flex">

</div>
</div>
<div class="row block-9">
<div class="col-md-6 order-md-last d-flex">


</div>

<div class="col-md-6 d-flex">
	<div id="map" class="bg-white"></div>
</div>
</div>
</div>
</section>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>-->
<?php
include("footer.php");
?>
