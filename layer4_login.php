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
window.location.href = "layer5_login.php?var=" + name;
}
</script>



<title>
Layer 4!
</title>
</head>
<?php
echo '<body text="black" marginwidth="45"> <br><center><b><font face="calibri" size ="8"> Authentication System</font></b></center>
<a href="logout.php"><font color="black">Logout</font></a><hr color="#CC0000">
<center><h4>Image Layer 4/5<br><i>Selecting any image will redirect you the next layer !<br><br>
Choose your Image ::<br><br>';

            $var=$_GET['var'];
			$_SESSION['a'][8]=$_GET['var'];
			$_SESSION['layer3']=$_GET['var'];
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