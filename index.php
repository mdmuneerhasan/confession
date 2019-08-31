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
 include("header.php"); 
 include("showcomment.php");
 include("comment.php"); 
 function alllink(){
 echo "pg=1";}
if(isset($_SESSION["name"]))
 comment();
showcomment(); 
$pg=0;
?>
<table  >
<tr><th bgcolor="sky blue"><a href="#top">RETURN TO TOP</a></th></tr>
</table>

<?php
 include("footer.php"); ?>