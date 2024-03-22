<html>
<body bgcolor="antiquewhite">
<form method="POST">
<table border='2'>
<tr><th>fid:</th><td><input type="text" name="n1"></td></tr>
<tr><th><input type="submit" value="submit" name="submit"><input type="reset" value="reset" name="reset"></tr></th>
</table>
</form>
</body>
</html>
<?php
include("connectioncode.php");

if(isset($_POST['submit']))
{
	$fid=$_POST['n1'];
$sql="select * from mangoshop where fid=$fid";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
echo "fid:".$row["fid"]." fname:".$row["fname"]." mname:".$row["mname"]." lname:".$row["lname"]." address:".$row["address"]." villege:".$row["villege"]." landmark:".$row["landmark"]." taluka:".$row["taluka"]." district:".$row["district"]." state:".$row["state"]." mangotype:".$row["mangotype"]." area:".$row["area"]." username:".$row["username"]." password:".$row["password"]."<br>";
} 
}
else
{
	echo "No record found";
}
}
mysqli_close($conn);
?>