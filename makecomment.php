<table bgcolor=#999999 style="width:95%" align="center">
<form action="makecomment.php" method="post">
<tr><td bgcolor=white colspan=3><font size=4><textarea name="comment" cols=50% rows=5% > </textarea></font> </td></tr>
<tr><td><font size=5><input type=radio name=gender value=male>&nbsp&nbsp  Male</td><td><font size=5 >
<input type=radio name=gender value=female>&nbsp&nbsp Female</td></tr>
<tr><td ><font size=5><input type=submit name=submitc value=comment></form></td>

</form>
</table>
<?php
if(isset($_POST['submitc']))
{	include_once ("dbcon.php");
	$lik=0;
	$name='not defined';
	$gender=$_REQUEST['gender'];
	$imagename='';
	$comment=$_POST['comment'];
	if(isset($_POST['nature']))
	$nature=$_POST['nature'];
else{ $nature='h';}
	$sql="INSERT INTO `comment`( `images`, `comment`, `uname`, `nature`, `gender`, `lik`)
	VALUES ('$imagename','$comment','$name','$nature','$gender','$lik')";
	$run=mysqli_query($con,$sql);
header('location:index.php#comment');
}
?>
