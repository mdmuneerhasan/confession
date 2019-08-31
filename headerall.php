<html>
<head><title>JMI-Faculty of Engineeringand technology confessions </title></head>
<body bgcolor="grey" ><a name="t"></a>
<?php 
session_start();
if(isset($_SESSION["name"]))
{ $name=$_SESSION["name"];
 ?><h1><font><?php
echo "welcome ".$_SESSION["name"];
?></h1><a name="top"></a>
<form action="logout.php">
<table cellspacing=10 >
<tr><td><input type="submit" value="LOG OUT" ></td></form>
<?php
}
else{ ?>
	<form action="login.php">
<td><input type="submit" value="LOG IN" ></td></tr>
</table></form><?php
	
}

 function alllink(){
 echo "pg=1";} ?>
<form action="index.php?<?php alllink(); ?>">
<table cellspacing=10 >
<tr><td><input type="submit" value="HOME" ></td></tr>
</table></form>
<table bgcolor="sky blue" cellpadding=8 style="width:40%">
<tr><td rowspan=2><img src="photo/confess.img" style="max-width:140px"></td><td>
<font colour=white size=5>JMI-Faculty of Engineering and <br> technology confessions</font></td></tr><tr>
<td valign=top >@JMI.FET.confessions</td></tr>

</table>

<hr align=left size=4 width=40% >