<?php
 session_start();
 if(isset($_SESSION['rollno'])){
	 
 }else{
	 header("location:login.php?user_not_logged_in=1");
 }
?>

<?php
	include("php_files/config.php");
?>
<style type="text/css">
table{
	width:80%;
	margin:10%;
	border:5px ridge silver ;
	box-shadow:2px 2px 10px black;
}
td,th{
	background-color:white;
	text-align:center;
}

</style>


<html>
<head>
<title>Attendence</title>
<link rel="stylesheet" type="text/css" href="styles/index_style.css">
<link rel="stylesheet" type="text/css" href="styles/container.css">
</head>
<body style="background-image:url(images/background_rotated.jpg);background-attachment:fixed;background-size:cover;">
<?php 
include "components/menubar.php";
?>
<div id="container">


<table border="0.5">
<tr>

<?php
$names=array("date","gurdeep","ajay","messi","aman","gareth","cristiano","james","keylor","ter","neymar","louis","sergio","xalton","wayne");
$name=array('date','gurdeep','ajay','lionel','aman','gareth','cristiano','james','keylor','ter','neymar','louis','sergio','xalton','wayne');
for($i=0;$i<15;$i++){
			echo "<td>";
			echo $names[$i];
			echo "</td>";
	}
echo "</tr>";
$query="SELECT * FROM cse_attendance;";
$student=mysqli_query($con, $query);

while($record=mysqli_fetch_assoc($student)){
	
	echo "<tr>";
	
	for($i=0;$i<15;$i++){
	echo "<td>".$record[$name[$i]]."</td>";
	
	}
	
	
	echo "</tr>";
	
}
 ?>
 
 </table>


</div>

<?php
include "components/bottombar.php";
 ?>
</body>
</html>