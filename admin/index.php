<?php
    //khởi tại session
    session_start(); 
    //khai báo để nhảy trang đuược(áp dụng cho hàng header)
    ob_start();

    include_once('../lib/DataProvider.php');  
    
    if(!isset($_SESSION['MaTaiKhoan'])) 
        header("location:../index.php");
    else if($_SESSION['MaLoaiTaiKhoan'] == 1)
        header("location:../index.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản Trị Viên</title>
<style>
    #container{
        background-color: #ccc;
    }
</style>
</head>

<body>
<div id="container">
    
    <!--menu-->
    <?php include("modules/mHeader.php"); ?>
    <!--//menu-->
	<?php include("modules/mWrapper.php"); ?>
	 <!--footer-->
    <?php include("modules/mFooter.php"); ?>
</div>
</body>
</html>
