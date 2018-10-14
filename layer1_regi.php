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
window.location.href = "layer2_regi.php?var=" + name;
}
</script>

<title>
Layer 1!
</title>
</head>
<?php
echo '<body bgcolor="" text="black" marginwidth="45"> <br><center><b><font face="calibri" size ="8">Authentication System</font></b></center>
</a><hr color="black">
<center><h4>Image Layer 1/5<br><font color="orange">Complete all the layers to complete your registration !</font><br><br>
Choose your Image ::<br><br>';
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
echo '<img src="images\\'.$ar[$i].'jpg" onclick="changeIt(this)" height="175" width="175"> ';
echo '</center>
</body>';
	
?>
</html>