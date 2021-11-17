<?php
 session_start();
 if(isset($_SESSION['name'])){
	 
 }else{
	 header("location:adm_login.php");
 }
?>

<style type="text/css">
#container{
	position:absolute;
	height:60%;
	width:80%;
	left:10%;
	top:20%;
	background-color:rgba(0,0,0,0.5);
	color:white;
}
h2 {
	display: inline-block;	<!--to stop putting the newline after heading-->
}
input{
	margin:2%;
	font-size:18px;
	
}



</style>

<?php
$string1 = file_get_contents("../components/news_bar_files/news1.txt");
$string2 = file_get_contents("../components/news_bar_files/news2.txt");
$string3 = file_get_contents("../components/news_bar_files/news3.txt");
 ?>

<html>
<head>
<title>News Update</title>
<link rel="stylesheet" type="text/css" href="styles/index_style.css">

</head>
<body style="background-image:url(../images/background.jpg);">
<a href="dashboard.php" title="click here to go back to Dashboard"><img src="images/home_icon.png" width="100px;" style="margin-left:20px;"></a>

<div id="container">
<center>
<h3>This functionality has been disabled for security reasons </h3> <br>
<h3>Thanks for your understanding! </h3>
<!--
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h2>News 1</h2><input type= "text" name="news1" size = "80" height = "20" maxlength="150" value="<?php echo $string1; ?>"><br>
<h2>News 2</h2><input type= "text" name="news2" size = "80" height = "20" maxlength="150" value="<?php echo $string2; ?>"><br>
<h2>News 3</h2><input type= "text" name="news3" size = "80" height = "20" maxlength="150" value="<?php echo $string3; ?>"><br>



<input type="submit" name="submit" value="Update News">

</form>
-->
</center>
</div>

</body>
</html>

<?php
if(isset($_POST['submit'])){
	$string1 = $_POST['news1'];
	$string2 = $_POST['news2'];
	$string3 = $_POST['news3'];
	
	
	$file = fopen("../components/news_bar_files/news1.txt", "w");
	fwrite($file, $string1);
	fclose($file);
	
	$file = fopen("../components/news_bar_files/news2.txt", "w");
	fwrite($file, $string2);
	fclose($file);
	
	$file = fopen("../components/news_bar_files/news3.txt", "w");
	fwrite($file, $string3);
	fclose($file);
	
	echo "<script type='text/javascript'>
			alert('news updated successfully');
		window.location.href = 'dashboard.php';
		
		
		</script>";
	
	
	
}

?>

