<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

				<!-- CSS file link -->
	<link href="css/style.css" rel='stylesheet' type='text/css'>
	<!-- <link href="css/bootstrap.css" rel='stylesheet' type='text/css'> -->

	    		<!-- Font Style -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

	    		<!-- jQuery UI -->
	<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

			 <!-- Custom Theme files  -->
<!-- 	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script> -->

<?php include('index.html');?>

<?php include('includes/footer.php');?>

<?php include('includes/signup.php');?>			

<?php include('includes/signin.php');?>			

<?php include('includes/write-us.php');?>			
</body>
</html>