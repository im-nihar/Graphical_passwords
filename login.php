<?php
session_start();
session_destroy();
session_start();
ob_start();
?>
<html>


<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

<script>
			function validate()
			{
			var name=document.forms["login"]["name"].value;
			var password=document.forms["login"]["password"].value;
			
			
			if ((password==null || password=="") && !(name==null || name==""))
			{
			alert("Please enter your password !!");return false;
			}
			
			if (!(password==null || password=="") && (name==null || name=="")  )
			{
			alert("Please enter your name !!");return false;
			}
			
			if ((name==null || name=="") && (password==null || password==""))
			{
			alert("Please enter your name !! \nPlease enter your password !!");return false;
			}
			else
			return true;
			}
			
		</script>
		<noscript>Your Javascript is off !! </noscript>

</head>

<body text="black" marginwidth="30">
<?php
include("connect.php");
if(!isset($_POST['submit']))
{
echo'<br><center><b><font face="calibri" size ="8">Authentication System</font></b></center>
<hr color="">';
 
  
    echo'&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
  
echo'<font size="5">Login</strong><br></font></h2>
<form name="login" action="login.php" method="post" onSubmit="return validate();" >
<p align="center">
Username : <input type ="text" name="name"><br><br>
Password : <input type="password" name="password"><br><br>
<input type="submit" value="Login" name="submit">
</p>
</form>
<p align="center">
<i><a href="signup.php"><font color="">To register click here</font></a></i><br></p><br><br><br><br><br><br><br><br><br><br><br><br>';			

}
		else
		{
			session_start();
			$name=$_POST['name'];
			
			
			//$name=mysql_real_escape_string($con,$_POST['name']);
			$password=$_POST['password'];
			
			
		//	$password = mysqli_real_escape_string($con, $_POST['password']); 
			$query="select * from user where username='$name' and password='$password'" ;
			
			
			
			//for sql injection prevention
			
			//$query="select * form users where username= '".username;
			//$query.="' AND password ='".$password."'";
			
			
			
			
			//echo $query;
			$result=mysqli_query($con,$query);
			if($result)
			{
				$rows=mysqli_num_rows($result);
				if($rows>0)
				{ 
					
					$row=mysqli_fetch_array($result);
					//if($row[5]==1)
					$_SESSION['uname']=$name;
					//header('Location:account.php');
					header('Location:layer1_login.php');
					
				}
				else
				{	
				$query="select * from user where username='$name' and password='$password'" ;
				$result=mysqli_query($con,$query);
				$row=mysqli_fetch_array($result);
				$rows=mysqli_num_rows($result);
				if($rows==0)
				echo'<br><center><b><font face="calibri" size ="8">Graphical Password Authentication System</font></b></center>
				<hr color="#CC0000"><center>No such user exists in our database !<br>Maybe you entered something wrong !<br><a href="login.php"><font color="white">Click here to go back</a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';			

				}
			}
			
		}
?>
</body>
</html>