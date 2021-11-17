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
table a{
	display:block;
	text-decoration:none;
	background-color:#c9d8f2;
	
}
table a:hover{
	background-color:silver;
}
</style>


<html>
<head>
<title>Delete Accounts</title>
<link rel="stylesheet" type="text/css" href="styles/index_style.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body style="background-image:url(../images/background.jpg);">
<a href="dashboard.php" title="click here to go back to Dashboard"><img src="images/home_icon.png" width="100px;" style="margin-left:20px;"></a>
<table border="0.5">
<tr>
<th>ID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Course</th>
<th>Branch</th>
<th>Roll No.</th>
<th>Update</th>
</tr>
<?php
$query="SELECT * FROM students;";
$student=mysql_query($query);
while($record=mysql_fetch_assoc($student)){
	
	$str="id={$record['id']}";
	echo "<tr>";
	echo "<td>".$record['id']."</td>";
	echo "<td>".$record['firstname']."</td>";
	echo "<td>".$record['lastname']."</td>";
	echo "<td>".$record['course']."</td>";
	echo "<td>".$record['branch']."</td>";
	echo "<td>".$record['roll_no']."</td>";
	echo "<td>"."<a href='delete.php?$str'>"."Delete"."</a>"."</td>";
	echo "</tr>";
	
	
}

 ?>
 </table>



</body>
</html>