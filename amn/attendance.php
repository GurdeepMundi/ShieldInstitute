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
input{
	width:100%;
	background-color:silver;
}
ul{color:white;font-size:20px;}
</style>


<html>
<head>
<title>Attendance</title>
<link rel="stylesheet" type="text/css" href="styles/index_style.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body style="background-image:url(../images/background.jpg);">
<a href="dashboard.php" title="click here to go back to Dashboard"><img src="images/home_icon.png" width="100px;" style="margin-left:20px;"></a>
<div>
<?php
$names=array("Date","Gurdeep","Ajay","Messi","Aman","Bale","Ronaldo","James","Navas","Ter-stegen","Neymar","Suarez","Aguero","Ibrahimovic","Rooney");
$values;
?>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table border="0.5">
<tr>
<?php
	for($i=0;$i<15;$i++){
			echo "<td>";
			echo $names[$i];
			echo "</td>";
	}
	echo "<tr>";
	for($i=0;$i<15;$i++){
			echo "<td>";
			echo "<input type='text' name=$i>";
			echo "</td>";
	}
	echo "</tr>";
		
	?>
	</tr>
	

<tr>
<td colspan="15"><center><input type="submit" name="submit" value="submit" style="width:30%;margin:10px;"></center></td>
</tr>
</form>
<ul>
<li><h3>Formating instructions</h3></li>
<li>Date can be written in format (dd-mm-yyyy)</li>
<li>instead of present or absent just type p or a in the fields.</li>


<?php if(isset($_GET['submit'])){
	$value=array($_GET['0'],$_GET['1'],$_GET['2'],$_GET['3'],$_GET['4'],$_GET['5'],$_GET['6'],$_GET['7'],$_GET['8'],$_GET['9'],$_GET['10'],$_GET['11'],$_GET['12'],$_GET['13'],$_GET['14']);
$query="INSERT INTO cse_attendance VALUES ('$value[0]','$value[1]','$value[2]','$value[3]','$value[4]','$value[5]','$value[6]','$value[7]','$value[8]','$value[9]','$value[10]','$value[11]','$value[12]','$value[13]','$value[14]');";

$res=mysqli_query($con, $query);

if($res){
	echo "<script type='text/javascript'> alert('Attendence uploaded');</script>";
}else{
	echo "<script type='text/javascript'> alert('failed');</script>";
	echo mysqli_error();
}


}
 ?>



</div>
</body>
</html>