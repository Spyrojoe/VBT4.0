<!DOCTYPE html>
<html>
<head>
	<title>Brad's Root Template - v4.0</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include("inc/css.php"); ?>
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




















