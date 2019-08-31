<?php 
include("dbcon.php");

function comment()
{ ?>

<table border=4 >
<table>
<tr><td><form action="comment.php?name=<?php echo $_SESSION["name"]; ?>&gender=<?php echo $_SESSION["gender"]; ?>" method="post" enctype="multipart/form-data"></td>
<tr><font size=4>write something below...</font></tr>
<td><img src="photo/logo.pic" style="max-width:20px"></td><td> <input type= "file" name="img1" ></td><td>(optional)</td></tr>
<tr><td bgcolor=white colspan=3><font size=4><textarea name="comment" cols="65" rows="4" > </textarea></font> </td></tr>
 </table><table><tr><td><input type=radio name=nature value=h>hide my name</td><td><input type=radio name=nature value=s>show my name</td></tr>
</table>
<table cellspacing=10 >
<tr><td ><input type=submit name=submit value=comment></form></td>
</tr>
</table>
</table>
<?php

}
if(isset($_POST['submit']))
{
	$lik=0;
	$name=$_REQUEST['name'];
	$gender=$_REQUEST['gender'];
	$imagename=$_FILES['img1']['name'];
	$tempname=$_FILES['img1']['tmp_name'];
	$comment=$_POST['comment'];
	if(isset($_POST['nature']))
	$nature=$_POST['nature'];
else{ $nature='h';}
	move_uploaded_file($tempname,"photo/$imagename");
	$sql="INSERT INTO `comment`( `images`, `comment`, `uname`, `nature`, `gender`, `lik`) VALUES ('$imagename','$comment','$name','$nature','$gender','$lik')";
	$run=mysqli_query($con,$sql);
header('location:index.php');
}
 ?>