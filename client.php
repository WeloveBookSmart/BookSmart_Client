<?php
$con = mysqli_connect("localhost","","root","");

	if(isset($_POST['insert_post'])){
	
	//get the text data from the fields
	$service_title = $_POST['service_title'];
	$service_category = $_POST['service_category'];
	$service_type = $_POST['service_type'];
	$service_location = $_POST['service_location'];
	$service_desc = $_POST['service_desc'];
	$service_price = $_POST['service_price'];
	$service_keywords = $_POST['service_keywords'];
	
	//getting the image from the fields
	$service_image = $_FILES['service_image']['name'];
	$service_image_tmp = $_FILES['service_image']['tmp_name'];
	
	move_uploaded_file($service_image_tmp,"../images/service_image/$service_image");
	
	$insert_service = "INSERT INTO service (service_title,service_image,service_category,service_type,service_location,service_desc,service_price,service_keywords) VALUES('$service_title','$service_image','$service_category','$service_type','$service_location','$service_desc','$service_price','$service_keywords')";
	
	$insert_serv = mysqli_query($con, $insert_service);
?>
<!DOCTYPE html>
<html lang="en">  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Become Our Client</title>

    <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
	<form class="form-horizontal">
	<form action="service_process.php" method="POST">
	<fieldset>

<!-- Form Name -->
<legend align="center">Become Our Client</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Name Of Service:</label>  
  <div class="col-md-4">
  <input id="service_title" name="service_title" type="text" placeholder="What Would You Call For Your Service?" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Pic input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="image">Service Image:</label>  
  <div class="col-md-4">
  <input id="services_category" name="services_image" type="file" placeholder="Please upload your image her" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="category">Service Category:</label>  
  <div class="col-md-4">
  <input id="services_category" name="services_category" type="text" placeholder="State Your Service Category. Eg: Space Rental, Agent" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="type">Service Type:</label>  
  <div class="col-md-4">
  <input id="service_type" name="service_type" type="text" placeholder="State Your Service Type. Eg: Homestay, Travel" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="location">Location Of Service:</label>  
  <div class="col-md-4">
  <input id="service_locate" name="service_location" type="text" placeholder="Address/Location For Execution Of Your Service. Eg: Online, Service Address" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Service Description:</label>  
  <div class="col-md-4">
  <input id="service_desc" name="service_desc" type="text" placeholder="State Simple Description Of Your Service. Eg: Service Focus On Busy People" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="amount">Service Price:</label>  
  <div class="col-md-4">
  <input id="service_price" name="service_price" type="text" placeholder="The Price Range Of Your Service. Eg: $2 - $500 per item" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Service Keywords:</label>  
  <div class="col-md-4">
  <input id="service_price" name="service_keywords" type="text" placeholder="Tag for your service. Eg: homestay, travel, cleaning, hospitality" class="form-control input-md" required="">
    
  </div>
</div>

	
	<div class="button" style="text-align:center;">
	<input type="submit" value="Upload Now!" class="btn btn-primary" id="Submit" name="Submit"/>
	<input type="submit" value="Cancel" class="btn btn-default" id="Cancel" name="Cancel" />
	</div>
	</fieldset>
	</form>
  </form>
  
  </body>
</html>
				