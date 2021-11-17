<html>
<head>
<title>SIT login</title>
<link rel="stylesheet" type="text/css" href="styles/index_style.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body style="background-image:url(images/background.jpg);">

<?php 
if (isset($_GET['user_not_logged_in'])){
	header("location:login_redirect.php");
}
?>

<div id="login-strip">

<div id="text">
<h2>Roll Number</h2>
<h2>Password</h2>
</div>

<div id="form" >
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="rn" placeholder="enter your university roll number" required>
<br/>
<input type="password" name="pass" placeholder="enter your password" required>
<br/>


</div>


<div id="buttons">
<input type="submit" name="submit" value="login" style="margin-left:40%;">

<input type="button" name="forgot_pass" value="Forgot Password" style="margin-left:3%;width:12%;color:blue;font-size:15px;" onclick="alert('you will have to request the administrator to help you out in recovering password')">

<br/><br/>

</form>

<a href="index.php" title="click here to go back to home page"><img src="icons/home_icon.png" width="70px;" homebutton="" style="margin-left:20px;"></a>

<form action="signup.php">
<font style="color:white;margin-left:70%;">not signed up? <input type="submit" name="sign_up" value="sign up" style="margin-left:1%;font-size:13px;font-weight:normal;height:25px;padding:0px;width:50px;"></font>
</form>


</div>
</div>
</body>
</html>

<?php
	include("php_files/config.php");
?>
<?php
if(isset($_POST['submit'])){
	$rollno = $_POST['rn'];
	$pass = $_POST['pass'];
	
	
	$query="SELECT * FROM students WHERE roll_no=$rollno";
	
	
	$student=mysql_query($query);
	$record=mysql_fetch_assoc($student);
	
	if(md5($pass)==$record['password']){
		session_start();
		session_destroy();
		session_start();
		$_SESSION['username']=$record['firstname'];
		$_SESSION['password']=$record['password'];
		$_SESSION['rollno']=$rollno;
		$_SESSION['branch']=$record['branch'];
			
		
	echo "<script type='text/javascript'>
			alert('you logged in successfully');
		</script>";
		
	}else{
		echo "<script type='text/javascript'>
			alert('you typed wrong roll number or password!');
		</script>";
	}
	
	
	
}

?>