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

<?php
$id=$_GET['id'];
$query="DELETE from students WHERE id=$id";
$delete=mysqli_query($con, $query);

header("location:delete_account.php");

?>