<?php include("headerall.php");
 session_start();
if(isset($_SESSION["name"]))
{  ?><h1><font><?php
echo "welcome ".$_SESSION["name"];
header('location:index.php');
?></h1><?php
}
else{ ?>
 
<h1><font>SIGN UP</font></h1>
<form   action="user.php?"   method="post"><table width=40%   >
<tr><td >Name: </td><td><input type="text" name="name" required="required" ></td></tr> 
<tr><td>Mobile number: </td><td><input type="text" name="mob" required="required" ></td></tr> 
<tr><td>Email id: </td><td><input type="text" name="email"required="required"  >.com</td></tr> 
<tr><td>Gender: </td><td><input type="radio" name="gender" value="male" required="required">Male<input type="radio" name="gender" value="female" required="required">Female</td></tr> 
<tr><td >password: </td><td><input type="password" name="p" placeholder="enter your password" required="required" ></td></tr>
<tr><td><input type="submit" value="SIGN UP" ></td></tr> 
</table></form>
</body>
</html>

<?php

} ?>
