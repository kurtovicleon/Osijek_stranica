<?php include_once '../config.php'; ?>
<!DOCTYPE html>

<html class="no-js" lang="en" dir="ltr">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $naslovapp; ?></title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/naslovna.css">
    <link rel="stylesheet" href="../css/loginstil.css">
    
			</head>
	<body>
	<?php print_r($_SESSION); ?>


        <?php include_once "../include/topbar.php";?>
    
	 	
   		<?php 	include_once "../include/skripte.php"; ?>

       

	</body>
    
</html>