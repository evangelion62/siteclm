<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
    	<meta name="author" content="">
    	<link rel="icon" href="../../favicon.ico">
    	
		<!-- titre de la page -->
		<title><?php echo (empty($templateTitle)) ? 'collége Louise Michel' : htmlspecialchars($templateTitle); ?></title>
		
		<!-- Bootstrap -->
    	<link href="web/css/bootstrap.min.css" rel="stylesheet">
    	<!-- Bootstrap surcharge -->
    	<link href="web/css/bootstrapOverLoad.css" rel="stylesheet">
    	
    	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<!-- navbar======================================================== -->
		<?php if (is_file('template/navbar.php')){require_once 'template/navbar.php';}?>
		
		<div class='container'>
		<?php if (!empty($contents)) {echo $contents;}?>
		</div>
		
		<!-- footer======================================================== -->
		<?php if (is_file('template/footer.php')){require_once 'template/footer.php';}?>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="web/js/bootstrap.min.js"></script>
	</body>
</html>