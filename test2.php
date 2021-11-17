<?php
mysql_connect("localhost","root");
mysql_select_db("project");
?>

<?php
	
	$query="CREATE TABLE orders(
	user_id int(11) PRIMARY KEY,
	p_id int(11),
	username varchar(50),
	price int(11),
	address text(1000),
	email varchar(200))";
	
	
	$student=mysql_query($query);
	
	if($student){
		
	}else{
		echo mysql_error();
	}
	
		?>