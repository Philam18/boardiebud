<!doctype HTML>
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->

<?php 
	require './var.php'; 
?>

<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<title>BoardieBud: Homepage</title>
<html>
<head>
	<base href="http://localhost/boardiebud/" />
	<link rel="stylesheet" type="text/css" href="<?php echo $rootdir;?>main.css">
	<script type="text/javascript">

		var dir="<?php echo $rootdir; ?>";
	    $(document).ready(function(){
	    	$("#menu").load(dir+"nav.php");
	    });

	</script>
	<div id="menu"></div>

</head>
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->

<body>

	<div class="box gap-top" id="header-container">
		<div id="header-text-holder">
			<img class="img-responsive center-block pull" id="header-image-1" src="./media/images/logo1.png">
			<div id="box">
				<h3 id="header-text-1">Your review companion
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				</h3>
			</div>
		</div>
	</div>

	<div class="box" id="content-container">

	</div>

	<div class="content-container">
	</div>


</body>	
</html>
