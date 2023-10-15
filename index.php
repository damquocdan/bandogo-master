<?php
    session_start();
    include_once('lib/DataProvider.php');
    include_once('lib/GioHang.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/Style.css">
    <script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div>
	<?php include("modules/mHeader.php"); ?>
    <?php include("modules/mThanhTimKiem.php");?>
	<?php include("modules/mMenuNgang.php");?>
    
    <div id="content">
    	<?php include("modules/mMenuDoc.php") ?>
                     
    	<?php include("modules/mContent.php"); ?>
    </div>
    
    <?php include("modules/mFooter.php") ?>
</div>
    
</body>
</html>