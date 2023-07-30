<?php
	include("header.php");
	include("menu1.php");
?>
 <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span>Star Complex in Star City</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">+917856232569</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="#">info@yoursite.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div>
		<?php
			include("detialDB.inc.php");
			if(isset($_POST ['submit']))
			{
				//$id = $_POST['id'];
				$name = $_POST['name'];
				$email = $_POST['email'];
				$sub = $_POST['subject'];
				$mesg = $_POST['message'];
				$insert= mysqli_query($mysqli_conn,"insert into contact(id,name,email,subject,message) values('','$name','$email','$sub','$mesg')");
			}
		?>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" method="post"class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit"value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>


<?php
	include("footer.php");
?>