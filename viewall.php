<?php
include("connectioncode.php");
$sql="select * from mangoshop";
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
mysqli_close($conn);
?>