<html>
<head>
<title>administrator login</title>
<link rel="stylesheet" type="text/css" href="styles/index_style.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body style="background-image:url(../images/background.jpg);">
<a href="../index.php" title="click here to go back to Homepage"><img src="../icons/home_icon.png" width="70px;" style="margin-left:20px;"></a>


<div id="login-strip">

<div id="text">
<h2>Username</h2>
<h2>Password</h2>
</div>

<div id="form">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="name" placeholder="username" required>
<br/>
<input type="password" name="pass" placeholder="password" required>
<br/>
</div>

<div id="buttons">
<input type="submit" name="submit" value="login" style="margin-left:47%;">

<br/><br/>

</form>
</div>

</div>



<?php
	include("php_files/config.php");
?>
<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	
	
	$query="SELECT * FROM accounts WHERE name='$name'";
	
	
	$accounts=mysqli_query($con, $query);
	$record=mysqli_fetch_assoc($accounts);
	if($pass == $record['password']){
		session_start();
		session_destroy();
		session_start();
		$_SESSION['name']=$record['name'];
		$_SESSION['password']=$record['password'];
		
		header("location:dashboard.php");
	}else{
		echo "<script type='text/javascript'>
			alert('you typed wrong username or password!');
		</script>";
	}
	
	
	
}

?>

</body>
</html>