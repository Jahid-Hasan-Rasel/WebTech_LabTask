		<?php			if(isset($_POST['signup']) )	{	$servername ="localhost";	$username 	="root";	$password 	="";	$dbname 	="webtech";			$id 	=trim ($_POST['id']);	$pass	=trim ($_POST['pass']);	$cpass  =trim ($_POST['cpass']);	$name   =trim ($_POST['name']);	$ut     =trim ($_POST['ut']);		if($pass ===$cpass ) {	$conn = mysqli_connect($servername, $username, $password, $dbname);			if(!$conn){		die("Connection Error!".mysqli_connect_error());	}		$sql = "insert into user values('$id','$pass','$name','$ut')";	mysqli_query($conn, $sql);		mysqli_close($conn);	}	else	{		echo "password not matched";	}	}	?><center><form action="#" method="POST">	<table border="0" cellspacing="0" cellpadding="0">		<tr>			<td>				<fieldset>					<legend><h3>REGISTRATION</h3></legend>					Id<br/><input type="text" name="id"><br/>					Password<br/><input type="password" name="pass"><br/>					Confirm Password<br/><input type="password" name="cpass"><br/>					Name<br/><input type="text" name="name"><br/>					User Type<hr/>					<input type="radio" name="ut" value="user"/>User					<input type="radio"  name="ut" value= "admin" />Admin					<hr/>					<input type="submit" name="signup"value="Sign Up">					<a href="login.php">Sign In</a>				</fieldset>			</td>		</tr>                                	</table></form></center>			