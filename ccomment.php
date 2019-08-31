<?php $in=1;
include("dbcon.php");
if(isset($_SESSION["name"]))$name=$_SESSION['name'];
 if(isset($_REQUEST['like'])){ $ll=$_REQUEST['ll']+1; $nn=$_REQUEST['nn'];
$up="UPDATE `comment` SET `lik`='$ll' 
WHERE `no`= '$nn' "; 
$run=mysqli_query($con,$up); }
	global $con;  $no=$_REQUEST['no'];
	global $name ;  $pg=$_REQUEST['pg'];
$query="SELECT * FROM `comment`WHERE `no`='$no' ";
$run=mysqli_query($con,$query);
if($run==true){ while($data=mysqli_fetch_assoc($run))
{
if (isset ($data['images']))
{ 
?>
<a name="t"></a>
<table style="width:95%" align="center">
<tr><td style="color:blue ;font-size:25">JAMIA MILLIA ISLAMIA<br> confession space</td></tr>
<tr><td style="color:black ;font-size:20">#<?php echo $data['no']; ?></td></tr>
<tr><td>
<?php 
if(($data['images'])==true ){ ?> 
<a  href="ccomment.php?no=<?php echo $data['no']; ?>&pg=<?php echo $pg; ?> "> <a name="t<?php echo $data['no']; ?>" ></a>
<img src="photo/<?php echo $data['images'];?>" style="max-width:95%;"/></td>
</a>
<?php } ?>
<tr><td style="color:black ;font-size:20"><p><?php echo $data['comment']; ?></p></td></tr>
<tr><td style="color:black ;font-size:20">~<?php if($data['nature']=='s')echo $data['uname'];else echo  $data['gender'];?></td></tr>
<tr><td>
<?php echo $data['lik']; ?>   <a style="text-decoration:none" href="ccomment.php?no=<?php echo $data['no']; ?>&pg=<?php echo $pg; ?>&nn=<?php echo $data['no']; ?>&ll=<?php echo $data['lik']; ?>&like=lik#t<?php echo $data['no']; ?> ">
<b>&nbsp&nbsp&nbsp Like&nbsp </b></a>
<a style="text-decoration:none" href="https://www.facebook.com" >
<b>&nbsp&nbsp Share&nbsp </b></a>
<?php  
if($data['uname']==$name)
{ ?>
<a style="text-decoration:none" href="delete.php?no=<?php echo $data['no']; ?>&pg=<?php echo $pg; ?>" >
<b>&nbsp&nbsp Delete&nbsp </b></a>
<?php } ?>
</td></tr>
</table>
<hr color=grey>
<?php

}
}
}
// show ccomment
if(isset($_REQUEST['clike'])){ $cll=$_REQUEST['cll']+1; $cnn=$_REQUEST['cnn'];
$up="UPDATE `ccomment` SET `lik`='$cll' 
WHERE `cno`= '$cnn' "; 
$run=mysqli_query($con,$up); }
$query="SELECT * FROM `ccomment`WHERE `no`='$no' ";
$run=mysqli_query($con,$query);
if($run==true){ while($data=mysqli_fetch_assoc($run))
{
if (isset ($data['images']))
{ $pg=0; 
?>

<table bgcolor=white style="margin-bottom:3px;"> <a name="c<?php echo $data['cno']; ?>" ></a>
<tr><td>
<?php 
if(($data['images'])==true ){ ?>
<a  href="ccomment.php?no=<?php echo $data['no']; ?>&pg=<?php echo $pg; ?> ">
<img src="photo/<?php echo $data['images'];?>" style="max-width:200px;"/></td>
</a>
<?php } ?>
<tr><td style="color:blue ;font-size:15">comment# <?php echo $in; $in++; ?></td></tr>
<tr><td style="color:black ;font-size:15"><p><?php echo $data['comment']; ?></p></td></tr>
<tr><td style="color:black ;font-size:13">~<?php if($data['nature']=='s')echo $data['uname'];else echo  $data['gender'];?></td></tr>
<tr><td>
<?php echo $data['lik']; ?>   <a style="text-decoration:none"  
href="ccomment.php?cnn=<?php echo $data['cno']; ?>&pg=<?php echo $pg; ?>&no=<?php echo $data['no'] ;?>&cll=<?php echo $data['lik']; ?>&clike=lik#c<?php echo $data['cno']; ?> ">
Like&nbsp </a>
<a style="text-decoration:none" href="https://www.facebook.com" >
 Share&nbsp </a>
<?php  
if($data['uname']==$name)
{ ?>
<a style="text-decoration:none" href="cdelete.php?no=<?php echo $data['no']; ?>&cno=<?php echo $data['cno']; ?>&pg=<?php echo $pg; ?>" >
 Delete &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
<?php }
else{?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php }
 ?>
</td></tr>
</table>
<?php
}}}
 //comment box 
{ ?>
<table bgcolor=#999999 style="width:95%" align="center">
<tr><td><form action="ccomment.php?no=<?php echo $no ; ?>&pg=<?php echo $pg ; ?>&y=#b" method="post" enctype="multipart/form-data"></td>
<tr><td bgcolor=white colspan=3><font size=4><textarea name="comment" cols=50% rows=5% > </textarea></font> </td></tr>
<tr><td><font size=5><input type=radio name=gender value=male>&nbsp&nbsp  Male</td><td><font size=5 >
<input type=radio name=gender value=female>&nbsp&nbsp Female</td></tr>
<tr><td ><font size=5><input type=submit name=submit value=comment></form></td>
</tr><a name="b" ></a>
</table>
</table>
<?php

}
if(isset($_POST['submit']))
{
	$lik=0;
	$name="not defined";
	$no=$_REQUEST['no'];
	$gender=$_REQUEST['gender'];
	$imagename="";
	$comment=$_POST['comment'];
	if(isset($_POST['nature']))
	$nature=$_POST['nature'];
else{ $nature='h';}
	$sql="INSERT INTO `ccomment`( `no`, `images`, `comment`, `uname`, `nature`, `gender`, `lik`) VALUES 
	('$no','$imagename','$comment','$name','$nature','$gender','$lik')";
	$run=mysqli_query($con,$sql);
} ?><table>
<tr><th bgcolor="sky blue"><a href="#t">MOVE TO TOP</a></th></tr>
</table>
</body>
</html>

