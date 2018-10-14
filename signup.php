<?php
session_start();
ob_start();
?>
<html>
<head>

<title>Signup</title>

<script>
			function validate()
			{
			var name=document.forms["signup"]["name"].value;
			var password=document.forms["signup"]["password"].value;
			var repassword=document.forms["signup"]["repassword"].value;
			var collname=document.forms["signup"]["collname"].value;
			var email=document.forms["signup"]["email"].value;
			var phone=document.forms["signup"]["phone"].value;
			var realname=document.forms["signup"]["realname"].value;
			
			
			if ((realname==null || realname=="") ||(password==null || password=="") || (name==null || name=="") || (repassword==null || repassword=="") || (collname==null || collname=="") || (email==null || email=="") || (phone==null || phone==""))
			{
				alert("All fields are compulsory ! \nPlease fill in the empty fields !");return false;
			}			
			if(password!=repassword )
			{
				alert("Passwords do not match !\nPlease provide the same password !");return false;
			}
			if(name.length>10)
				{
				alert('Please enter name of of less than 10 characters only !');return false;
				}
			if(phone.length!=10)
				{
				alert("Phone number must be exactly of 10 digits !\nPlease enter again !");return false;
				}
			
			else
			return true;
			}
			function test()
				{
				var name=document.forms["signup"]["name"].value;
				if(name.length>10)
				{
				alert('Please enter name of less than 10 characters only !');
				}
				}
				
				function test2()
				{
				var password=document.forms["signup"]["password"].value;
				var repassword=document.forms["signup"]["repassword"].value;
				if(password!=repassword || password.length<6 || password.length>20 || password.search(/[a-z]/i) < 0 ||password.search(/[0-9]/) < 0 || password.search(/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/) < 0  )
				{
				alert("Passwords do not match !\nPlease provide the same password \nPassword must contain minimum 8 characters atleast one Upper case, lower case, special character, and one digit !");return false;
				}
				
		/*		if (password.search(/[a-z]/i) < 0) {
        alert("Your password must contain at least one letter."); 
    }
				if (password.search(/[0-9]/) < 0) {
        alert("Your password must contain at least one digit.");
    } */
				}
				
		/*	function validemail(emailfield)
			{
				var email=document.forms["signup"]["email"].value;
				var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
			}
			}*/
				
				function test3()
				{
				var phone=document.forms["signup"]["phone"].value;
				if(phone.length!=10)
				{
				alert("Phone number must be exactly of 10 digits !\nPlease enter again !");return false;
				}
				}
		
		/*	function validate_image()
			{

			var file=document.forms["form2"]["file"].value;		
			if (file==null || file=="")
			{
				alert("Please Upload a file !");return false;
			}
			else
			return true;
			}*/
			
		</script>
		<noscript>Your Javascript is off !! </noscript>

</head>

<body bgcolor="" text="black" marginwidth="45">

<?php
include("connect.php");
	if(!isset($_POST['submit']))
	{
		echo'<br><center><b><font face="calibri" size ="8">Authentication System</font></b></center>
<hr color="black">
						
			
			
			<a href="login.php"><font size="5" color="black">Login</a></font>
			<strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<font size="5">Signup</strong></font> 
			<br><br>
	<form name="signup" action="signup.php" method="post" onSubmit="return validate();">
	<p align="left">
	
	
	Username (Less than 10 characters) : <input type ="text" name="name" onBlur="test();"><br>
	<br>
	Password : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password"><br>
	
	<br>
	Re-Enter Password : <input type="password" name="repassword" onBlur="test2();"><br>
	<br>
	
	Enter Full Name :&nbsp;&nbsp;&nbsp;&nbsp; <input type ="text" name="realname"><br>
	
	<br>
	College Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" name="collname"><br>
	
	<br>
	
	Email Address :&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type ="text" name="email" onBlur="validemail();"> 
	
	<br>
	<br>
	Phone :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type ="number" name="phone" onBlur="test3();"><br>
	<br>
	All Fields are compulsory
	<input type="submit" value="Signup" name="submit">
	</p>
	</form>';
	

	
	
	}

	else 
			{
			$name=$_POST['name'];
			$password=$_POST['password'];
			$collname=$_POST['collname'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$realname=$_POST['realname'];
			
					$result=mysqli_query($con,"select * from user where name='$name'");
					if (mysqli_num_rows($result)>0)
					{
					echo'<br><center><b><font face="calibri" size ="8"> Authentication System</font></b></center>
					<hr color="black"><br><br><center>The username is already registered ! <br>Please use a different username !<br><a href="signup.php"><font color="black">Click here to signup</a>';
					exit;return;
					}
					$result=mysqli_query($con,"select * from user where email='$email'");
					if (mysqli_num_rows($result)>0)
					{
					echo'<br><center><b><font face="calibri" size ="8"> Authentication System</font></b></center>
					<hr color="black"><br><br><center>The email is already registered ! <br>Please use a different email !<br><a href="signup.php"><font color="black">Click here to signup</a>';
					exit;return;
					}
					$result=mysqli_query($con,"select * from user where phone=$phone");
					if (mysqli_num_rows($result)>0)
					{
					echo'<br><center><b><font face="calibri" size ="8"> Authentication System</font></b></center>
					<hr color="black"><br><br><center>The phone number is already registered ! <br>Please use a different phone number !<br><a href="signup.php"><font color="black">Click here to signup</a>';
					exit;return;
					}
					
					$_SESSION['a'][0]=$name;
					$_SESSION['a'][1]=$password;
					$_SESSION['a'][2]=$realname;
					$_SESSION['a'][3]=$collname;
					$_SESSION['a'][4]=$email;
					$_SESSION['a'][5]=$phone;
					header('Location:layer1_regi.php');
			}
								



?>







</body>
</html>