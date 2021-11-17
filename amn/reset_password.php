<?php
 session_start();
 if(isset($_SESSION['name'])){
	 
 }else{
	 header("location:adm_login.php");
 }
?>

<?php
	include("../php_files/config.php");
?>
<style type="text/css">
#container{
	position:absolute;
	height:50%;
	width:50%;
	left:25%;
	top:25%;
	background-color:rgba(0,0,0,0.5);
	color:white;
}
input{
	margin:2%;
	font-size:18px;
	
}
h3{
	display:inline-block;
}
form{
	margin:10%;
}
input[type=submit]{
	margin-left:90px;
}
</style>


<html>
<head>
<title>Reset Password</title>
<link rel="stylesheet" type="text/css" href="styles/index_style.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body style="background-image:url(../images/background.jpg);">
<div id="container">
<center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h3>Roll Number</h3><input type="text" name="rno" required><br/>
<h3>New Password</h3><input type="password" name="pass" required><br/>
<input type="submit" name="submit" value="change password">

</form>
</center>
</div>
<a href="dashboard.php" title="click here to go back to Dashboard"><img src="images/home_icon.png" width="100px;" style="margin-left:20px;"></a>

</body>
</html>

<?php
if(isset($_POST['submit'])){
	$rollno = $_POST['rno'];
	$pass = md5($_POST['pass']);
	
	
	$query="UPDATE students SET password='$pass'  WHERE roll_no=$rollno";
	
	
	$res=mysql_query($query);
	
	if($res){
		echo "<script type='text/javascript'>
			alert('password changed successfuly');
		</script>";
		
	}else{
		echo "<script type='text/javascript'>
			alert('the specified roll number doesnt exist');
		</script>";
	}
	
	
	
}

?>