<html>
<body bgcolor="antiquewhite">
<form method="POST">
<table border='2'>
<tr><th>mangotype:</th><td><input type="text" name="n1"></td></tr>
<tr><th><input type="submit" value="submit" name="submit"><input type="reset" value="reset" name="reset"></tr></th>
</table>
</form>
</body>
</html>
<?php
include("connectioncode.php");

if(isset($_POST['submit']))
{
	$mangotype=$_POST['n1'];
$sql="select * from mangoshop where mangotype='$mangotype'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num>0)
{
	echo "<table border='2'><tr><th>fid</th><th>fname</th><th>mname</th><th>lname</th><th>address</th><th>villege</th><th>landmark</th><th>taluka</th><th>district</th><th>state</th><th>mangotype</th><th>area</th><th>username</th><th>password</th></tr>";
	while($row=mysqli_fetch_assoc($result))
	{
echo "<tr><td>".$row["fid"]." </td><td>".$row["fname"]." </td><td>".$row["mname"]." </td><td>".$row["lname"]." </td><td>".$row["address"]." </td><td>".$row["villege"]." </td><td>".$row["landmark"]." </td><td>".$row["taluka"]." </td><td>".$row["district"]." </td><td>".$row["state"]." </td><td>".$row["mangotype"]." </td><td>".$row["area"]." </td><td>".$row["username"]." </td><td>".$row["password"]."</td></tr><br>";
} 
}
else
{
	echo "No record found";
}
}
mysqli_close($conn);
?>