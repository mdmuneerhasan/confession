<?php 
include("dbcon.php");
include("header.php");
 $cno=$_REQUEST['cno']; $no=$_REQUEST['no'];
  $pg=$_REQUEST['pg'];
session_start();
if(isset($_SESSION["name"]))
{ $query="SELECT * FROM `ccomment`WHERE `cno`='$cno' ";
$run=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($run);
$name=$_SESSION["name"]; 
if($data['uname']==$name)
{  ?>
<font size=6><b>ARE YOU SURE YOU WANT TO <br>DELETE THIS COMMENT</b></fomt><br>
<table>
<tr>
<td><form action="cdel.php?pg=<?php echo $pg; ?>&cno=<?php echo $cno; ?>&no=<?php echo $no; ?>" method=post ><input type= submit value=delete name=delete></form></td>
<td><form action="ccomment.php?pg=<?php echo $pg; ?>&no=<?php echo $no; ?>" method=post ><input type= submit value=cancel name=cancel></form></td>
</tr>
</table>

<?php
}
}
 ?>