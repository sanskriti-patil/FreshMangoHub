<?php 
include("connectioncode.php");
session_start();
?>
<html>
    <body bgcolor="antiquewhite">
        <form method="POST">
          
        <center>
            <table border=2>
           <tr> <th>username:</th><td><input type="text" name ="n1"></td></tr>
          <tr><th> password:</th><td><input type="text" name ="n2"></td></tr>
             <tr><td><input value="submit" type="submit" name ="submit"></td><td><input type="reset" name="cancel"></td></tr>
             <tr><td><a href="fregistration.php">CREATE NEW USER</a></td></tr>
            </table> </center>
        <?php 
        if(isset($_POST['submit']))
        {
        $username=$_POST['n1'];
        $password=$_POST['n2'];   
        if(!$username || !$password)
        {
            echo "Please enter the  username and password";
        }
        else
        {
            $sql="select * from fregistration where username ='$username'and password='$password'";
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);

        
        if($num>0)
        {
            $row=mysqli_fetch_assoc($result);
            echo"user found";
        $username=$row['username'];
        $_SESSION["username"]=$username;
        echo$_SESSION["username"];
    
        ?>
        
        <script> window.location.href="index.php"</script>
        <?php 
        }
        else
        {
            echo"no user found ";
        }
        }
        }
        ?>
        </form>
    </body>
</html>