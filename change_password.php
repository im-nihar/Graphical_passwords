<?php
session_start();
?>
<html>
<head>


<title>
Result
</title>
</head>
<?php
echo '<body text="black" marginwidth="45"> <br><center><b><font face="calibri" size ="8">Authentication System</font></b></center>
<a href="logout.php"><font color="black">Logout</font></a><hr color="black">';
?>

<body><center>
<form name="form" action="change_password_success.php" method="post" onSubmit="return validate();"> <font size="2" color="blue">
<br>Enter Old Password: <input type="password" name="old"><br><br>
Enter New Password: <input type="password" name="new"><br>
<br><input type="submit" name="sub" value="Update"></font>
</form>


</center>
</body>
</html>