<?php 
include("dbcon.php");
include("header.php");
 $no=$_REQUEST['no'];
  $pg=$_REQUEST['pg'];
session_start();
if(isset($_SESSION["name"]))
{ $query="SELECT * FROM `comment`WHERE `no`='$no' ";
$run=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($run);
$name=$_SESSION["name"]; 
if($data['uname']==$name)
{  ?>
<font size=6><b>ARE YOU SURE YOU WANT TO <br>DELETE THIS POST</b></fomt><br>
<table>
<tr>
<td><form action="del.php?pg=<?php echo $pg; ?>&no=<?php echo $no; ?>" method=post ><input type= submit value=delete name=delete></form></td>
<td><form action="next.php?pg=<?php echo $pg; ?>&no=<?php echo $no; ?>" method=post ><input type= submit value=cancel name=cancel></form></td>
</tr>
</table>

<?php
}
}
 ?>