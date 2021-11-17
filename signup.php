<html>
<head>
<title>signup</title>
<link rel="stylesheet" type="text/css" href="styles/index_style.css" />
<link rel="stylesheet" type="text/css" href="styles/container.css" />
<link rel="stylesheet" type="text/css" href="styles/sign_up.css" />

<!-- file to connect to database-->
<?php
	include("php_files/config.php");
?>

</head>
<body style="background-image:url(images/background_rotated.jpg);background-attachment:fixed;background-size:cover;">
<div id="container" style="padding:0px 0px 30px;left:11%;">

<h1 align="center" target>Sign up</h1>
<center>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table>

<tr>
<td class="first_col">firstname</td>
<td><input type="text" placeholder="e.g. Jacob" name="fstname" required/></td>
</tr>

<tr>
<td class="first_col">lastname </td>
<td><input type="text" placeholder="e.g. Smith" name="lstname" required/></td>
</tr>

<tr>
<td class="first_col">e-mail address</td>
<td><input type="text" placeholder="e.g. something@gmail.com" name="email" /></td>
</tr>

<tr>
<td class="first_col">gender</td>
<td><input type="radio" name="gen" value="m" style="width:50px;"/>male<input type="radio" name="gen" value="f" style="width:50px;"/>female</td>
</tr>

<tr>
<td class="first_col">course</td>
<td><select name="course" >
<option value="diploma">Diploma</option>
<option value="btech">B-tech</option>
<option value="mtech">M-tech</option>
</select></td>
</tr>

<tr>
<td class="first_col">branch</td>
<td><select name="branch" >
<option value="Automobile">Automobile Engineering</option>
<option value="CSE">Computer Science and Eng.</option>
<option value="ECE">Electronics and Communication Eng.</option>
</select></td>
</tr>

<tr>
<td class="first_col">Roll Number</td>
<td><input type="text" placeholder="e.g. 151649562495" name="rno" required/></td>
</tr>

<tr>
<td class="first_col">Password</td>
<td><input type="password" placeholder="enter password" name="pass" title="choose a strong password which should be at least 8 characters long" required/></td>
</tr>

<tr>
<td class="first_col">Confirm Password</td>
<td><input type="password" placeholder="enter password again" name="cpass" required/></td>
</tr>

</table>

<br/>
<br/>
<br/>

<input type="reset" name="reset" value="Reset" style="width:100px;">
<input type="submit" name="submit" value="Sign Up" style="width:100px; margin-left:100px;">

</form>
</center>
<!-- link button to go back to home page-->
<br/><br/>
<a href="index.php" title="click here to go back to home page"><img src="icons/home_icon.png" width="70px;" style="margin-left:20px;"></a>

</div>
</body>
</html>
<script type="text/javascript">
	function nomatch(){
		alert("password doesn't match! please try again.");
	}
 </script>

 
<?php
if(isset($_POST['submit'])){
	
	$fname = $_POST['fstname'];
	$lname = $_POST['lstname'];
	$email = $_POST['email'];
	$gen = $_POST['gen'];
	$course = $_POST['course'];
	$branch = $_POST['branch'];
	$roll_no = $_POST['rno'];
	$pass = md5($_POST['pass']);
	$cpass = md5($_POST['cpass']);
	
	if($cpass == $pass){
		
		$query="INSERT INTO students (firstname, lastname, email,gender,course,branch,roll_no,password) VALUES ('$fname', '$lname','$email' ,'$gen' ,'$course' ,'$branch' ,'$roll_no' ,'$pass');";
		
		
		
		$res=mysql_query($query);
		if($res){
			echo "<script type='text/javascript'> alert('Account created succesfully, you are logged in now. scroll down and click on home button on the left to go back to homepage');</script>";
			
		}else{
			echo "<script type='text/javascript'> alert('Account with this roll number already exists. Contact an administrator in the college to fix problems with your account');</script>";
			
		}
		
		
		
	}else{
		echo "<script type='text/javascript'>
		nomatch();
		</script>";
	}
	
}
?>
