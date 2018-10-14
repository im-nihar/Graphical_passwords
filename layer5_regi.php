<?php
session_start();
ob_start();
?>
<html>
<head>

<script>
function changeIt(img)
{
var name = img.src;
window.location.href = "success_regi.php?var=" + name;
}
</script>

<title>
Layer 5!
</title>
</head>
<?php
echo '<body bgcolor="" text="black" marginwidth="45"> <br><center><b><font face="calibri" size ="8">Authentication System</font></b></center>
</a><hr color="black">
<center><h4>Image Layer 5/5<br><font color="orange">Complete all the layers to complete your registration !</font><br><br>
Choose your Image ::<br><br>';
?>

<?php

            $var=$_GET['var'];
			$_SESSION['a'][9]=$_GET['var'];
			$_SESSION['layer4']=$_GET['var'];
$ar[0]="disney.";
$ar[1]="intel.";
$ar[2]="nike.";
$ar[3]="fedex.";
$ar[4]="amazon.";
$ar[5]="nbc.";
$ar[6]="adidas.";
$ar[7]="pepsi.";
$ar[8]="ibm.";
$ar[9]="hp.";
shuffle($ar);

echo '<center>';
for($i=0;$i<=9;$i++)
echo '<img src="images\\'.$ar[$i].'jpg" onclick="changeIt(this)" height="120" width="120"> ';
echo '</center>
</body>';	
?>

</body>
</html>