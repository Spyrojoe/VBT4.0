<!DOCTYPE html>
<html>
<head>
	<title>Brad's Root Template - v4.0</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="min1200.css">
	<link rel="stylesheet" type="text/css" href="max850.css">
	<link rel="stylesheet" type="text/css" href="max700.css">
	<link rel="stylesheet" type="text/css" href="max600.css">
	<link rel="stylesheet" type="text/css" href="max400.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
	
	<?php include("inc/sidebar.php"); ?>
	<?php include("inc/main.php"); ?>

	

	<!-- equal-height columns quick fix -->
	<script>
		$(document).ready(function(){
			var viewportHeight = $(window).outerHeight();
			var mainHeight = $("#main").outerHeight();
			if (mainHeight < viewportHeight) {
				$("#main").height(viewportHeight);
			}
		});
	</script>

</body>
</html>




















