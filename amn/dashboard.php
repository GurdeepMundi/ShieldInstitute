<?php
 session_start();
 if(isset($_SESSION['name'])){
	 
 }else{
	 header("location:adm_login.php");
 }
?>


<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" type="text/css" href="styles/index_style.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
<link rel="stylesheet" type="text/css" href="styles/dashboard.css">
</head>
<body style="background-image:url(../images/background.jpg);">
<a href="../index.php" title="click here to go back to Homepage"><img src="../icons/home_icon.png" width="70px;" style="margin-left:20px;"></a>

<div id="mark_attendence"><h1><a href="attendance.php">mark attendence</a></h1></div>
<div id="reset_password"><h1><a href="reset_password.php">reset password</a></h1></div>
<div id="delete_accounts"><h1><a href="delete_account.php">delete accounts</a></h1></div>
<div id="logout"><h1><a href="update_news.php">Update News</a></h1></div>

</body>
</html>