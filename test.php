<?php
	include("php_files/config.php");
?>

<?php
	
	$query="CREATE TABLE attcse(
	date date(1) NOT NULL,
	Gurdeep char(1);
	Ajay char(1);
	lionel char(1);
	Aman char(1);
	);";
	$res=mysql_query($query);
	
	if($res){
		echo	"table created";
	}else
	{
		echo	"nope".mysql_error();
	}
	
	?>
	
	