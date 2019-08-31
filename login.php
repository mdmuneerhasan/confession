<font size=7 color=blue ><u><b>  <?php
if(isset($_GET['ss']))
	echo "SIGN UP SUCCESSFUL";?></font></u></b> <?php 
include("headerall.php");
if(isset($_SESSION['name']))
{ header('location:index.php'); }
else
{
	
	?>

<form method ="post" action="login.php">
<h1>LOGIN</h1>
<table cellspacing=10>
<tr><td>email id:</td><td><input type="text" name="email"required>.com</td></tr>
<tr><td>password:</td><td><input type="password" name="password"required></td></tr>
<tr><td colspan=2><input type="submit" name="login"value="log in"></td></tr>

</table>
</form>
<table border=1 >
<tr><th bgcolor=red><a href="signup.php?<?php alllink(); ?>">SIGN UP NOW</a></th></tr>
</table>
</body>
</html>
<?php

include("dbcon.php");
if(isset($_POST['login']))
{$email=$_POST['email'];
$password=$_POST['password'];
$check="SELECT * FROM `userdata` WHERE `email`='$email' and `password` = '$password' ";
$run=mysqli_query($con,$check);
$row=mysqli_num_rows($run);
$data=mysqli_fetch_assoc($run);
if($row>0)
{
session_start();
$_SESSION["email"]=$_POST['email'];
$_SESSION["name"]=$data['name'];
$_SESSION["gender"]=$data['gender'];

header('location:index.php');
}
else
{
?>
<script>
alert('username or password incorrect');
window.open('login.php','_self');
</script><?php
}
}
}?>