<html>
<body bgcolor="antiquewhite">
<form method="POST">
<center>
<table border='2'>

<tr><td>fid:</td><th><input type="text" name="n1"></th></tr>
<tr><td>fname:</td><th><input type="text" name="n2"></th></tr>
<tr><td>mname:</td><th><input type="text" name="n3"></th></tr>
<tr><td>lname:</td><th><input type="text" name="n4"></th></tr>
<tr><td>address:</td><th><input type="text" name="n5"></th></tr>
<tr><td>villege:</td><th><input type="text" name="n6"></th></tr>
<tr><td>landmark:</td><th><input type="text" name="n7"></th></tr>
<tr><td>taluka:</td><th><input type="text" name="n8"></th></tr>
<tr><td>district:</td><th><input type="text" name="n9"></th></tr>
<tr><td>state:</td><th><input type="text" name="n10"></th></tr>
<tr><td>mangotype:</td><th><input type="text" name="n11"></th></tr>
<tr><td>area:</td><th><input type="text" name="n12"></th></tr>
<tr><td>username:</td><th><input type="text" name="n13"></th></tr>
<tr><td>password:</td><th><input type="text" name="n14"></th></tr>
<tr><td><input type="submit" value="submit" name="submit"></td></tr>
</table>
</center>
</form>
</body>
</html>
<?php
include("connectioncode.php");
if(isset($_POST['submit']))
{
	$fid=$_POST['n1'];
	$fname=$_POST['n2'];
	$mname=$_POST['n3'];
	$lname=$_POST['n4'];
	$address=$_POST['n5'];
	$villege=$_POST['n6'];
	$landmark=$_POST['n7'];
	$taluka=$_POST['n8'];
	$district=$_POST['n9'];
	$state=$_POST['n10'];
	$mangotype=$_POST['n11'];
	$area=$_POST['n12'];
	$username=$_POST['n13'];
	$password=$_POST['n14'];

	$sql="insert into mangoshop values($fid,'$fname','$mname','$lname','$address','$villege','$landmark','$taluka','$district','$state','$mangotype',$area,'$username','$password')";
	if(mysqli_query($conn,$sql))
	{
		echo "One record inserted";
	}
	else
	{
		echo "error".mysqli_error($conn);
	}
	}
mysqli_close($conn);
?>
