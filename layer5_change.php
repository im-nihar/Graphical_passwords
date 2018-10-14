<?php
session_start();
?>
<html>
<head>

<script>
function changeIt(img)
{
var name = img.src;
window.location.href = "layer_change_success.php?var=" + name;
}
</script>
<?php
echo '<body text="black" marginwidth="45"> <br><center><b><font face="calibri" size ="8"> Authentication System</font></b></center>
<a href="logout.php"><font color="black">Logout</font></a><hr color="black">';
?>


<title>
Choose image5!
</title>
</head>
<body><font size="5" color="black"> Choose new image 5</font>

<?php

include("connect.php");
			
                           $var=$_GET['var'];
          
			$_SESSION['a1'][4]=$_GET['var'];
			

		?>
<?php 
$arr = array(0,1,2,3,4,5,6,7,8,9);
shuffle($arr);
$i=array("images\\disney.jpg","images\\intel.jpg","images\\nike.jpg","images\\fedex.jpg","images\\amazon.jpg","images\\nbc.jpg","images\\adidas.jpg","images\\pepsi.jpg","images\\ibm.jpg","images\\hp.jpg");
echo '<center>
<img src="'.$i[$arr[0]].'" onclick="changeIt(this)" height="120" width="120">
<img src="'.$i[$arr[1]].'" onclick="changeIt(this)" height="120" width="120">
<img src="'.$i[$arr[2]].'" onclick="changeIt(this)" height="120" width="120" >
<img src="'.$i[$arr[3]].'" onclick="changeIt(this)" height="120" width="120">
<img src="'.$i[$arr[4]].'" onclick="changeIt(this)" height="120" width="120">
<img src="'.$i[$arr[5]].'" onclick="changeIt(this)" height="120" width="120">
<img src="'.$i[$arr[6]].'" onclick="changeIt(this)" height="120" width="120" >
<img src="'.$i[$arr[7]].'" onclick="changeIt(this)" height="120" width="120">
<img src="'.$i[$arr[8]].'" onclick="changeIt(this)" height="120" width="120">
<img src="'.$i[$arr[9]].'" onclick="changeIt(this)" height="120" width="120"></center>';?>

</body>
</html>