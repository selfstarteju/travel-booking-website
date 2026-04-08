<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
		<title>About Us | tourism_management</title>
    
    	<link href="../css/main.css" rel="stylesheet">
    	<link href="../css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="../js/jquery-3.2.1.min.js"></script>
    	<script src="../js/main.js"></script>
    	<script src="../js/bootstrap.min.js"></script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
		
		<?php 
		
			if(!isset($_SESSION["username"])) {
				include("../common/headerLoggedOut.php");
			}
			else {
				include("../common/headerLoggedIn.php");
			}
		
		?>
		
		<div class="spacer">a</div>
		
		<div class="col-sm-12 aboutUsWrapper">
			
			<div class="headingOne">
				
				About Us
				
			</div>
			
			<div class="para">
				Welcome to <strong>Tourism Management</strong>, your comprehensive travel booking platform designed to make travel planning seamless and enjoyable. Our platform serves as a one-stop solution for all your travel needs, integrating advanced booking services for flights, trains, and hotels into a single, user-friendly portal. <br><br>

				Whether you're looking for a quick one-way flight, planning a relaxing train journey, or booking comfortable accommodations across premier destinations, we've got you covered. With a secure, personalized user dashboard, tracking your booking history, accessing e-tickets, and managing your profile has never been easier. <br><br>

				Start exploring breathtaking destinations like Andaman and Nicobar, Rajasthan, and Jammu and Kashmir, and let us take the hassle out of your travel planning!
				<br><br>
				<strong>Our Office:</strong> Shrigonda, Maharashtra, India <br>
				<strong>Email:</strong> bhagyashreemane46@gmail.com, vaishnavisudrik7@gmail.com <br>
				<strong>Contact:</strong> +91 9637787041, +91 9322037722
			</div>
			
		</div> <!-- paymentWrapper -->
	
	<div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->
			
		<?php include("../common/footer.php"); ?>
				
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>