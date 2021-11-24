<!DOCTYPE html>
<html>
<head>

	<title>LOGIN PAGE</title>
</head>
<body>
<div style="color:white;background-color:black;">
	<form method="post">
		<h3>USERNAME:</h1><input type="textbox" name="user" placeholder="Enter UserName"><br>
		<h3>PASSWORD:</h1><input type="textbox" name="pass" placeholder="Enter password"><br>

		<input type="submit" name="login" value="login">

	</form>


</div>


<?php 
$con= mysqli_connect('localhost','root','','class');
if ($con==TRUE) {
	
}else{
	echo "Not Conneted to database";
}


if (isset($_POST['login'])) {
		$username=$_POST['user'];
		$password=$_POST['pass'];
		
		$qry="SELECT * FROM `admin` WHERE `email`='$username' AND `pass`='$password'";

		$run= mysqli_query($con,$qry);

		$data=mysqli_fetch_assoc($run);
		

		if ($data<1) {
		?>	
		<script type="text/javascript">
			alert("Your username or password is wrong");
			window.open('index.php','_self');
		</script>
		<?php
		} else{
			
		header("location:https://www.youtube.com");
		}
		

}










 ?>
</body>
</html>