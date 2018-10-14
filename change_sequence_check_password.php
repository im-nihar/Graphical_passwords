<?php
session_start();
ob_start();
?>

<html>
<head>


<title>Change Sequence</title>

<script>
			function validate()
			{
			//var name=document.forms["login"]["name"].value;
			var password=document.forms["login"]["password"].value;
			
			
			if ((password==null || password==""))
			{
			alert("Please enter your password !!");return false;
			}
			else
			return true;
			}
			

		</script>
		<!--noscript Your Javascript is off !! noscript -->
</head>

<body bgcolor="" text="black" marginwidth="45">
<?php
include("connect.php");
if(!isset($_POST['submit']))
{
echo'<br><center><b><font face="calibri" size ="8">Authentication System</font></b></center>
<hr color="black">';
echo'
<font size="5"><center><b>Enter Password to Change Sequence</strong><br></font><br>If you enter your password right then you will be redirected to change your image sequence else this page will refresh again to let you re-enter your password.<b></h2><br><br>

<form name="login" action="change_sequence_check_password.php" method="post" onSubmit="return validate();" >

Password : <input type="password" name="password" size="35"><br><br>



<input type="submit" value="Change Sequence" name="submit">

</p></form>



<a href="account.php"><font color="black">Click here to go back to your account</font></a>
<p align="right">';

}
		else
		{
			session_start();
			$name=$_SESSION['uname'];
			$password=$_POST['password'];
			$query="select * from user where username='$name' and password='$password'" ;
			$result=mysqli_query($con,$query);
			if($result)
			{
				$rows=mysqli_num_rows($result);
				if($rows>0)
				{ 
					
					$row=mysqli_fetch_array($result);
					$_SESSION['uname']=$name;
					header('Location:layer1_change.php');
					
				}
				else
				{	
				header('Location:change_sequence_check_password.php');
				}
			}
		}
?>
</body>
</html>